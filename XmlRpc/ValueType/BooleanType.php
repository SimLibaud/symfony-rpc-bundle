<?php
/*
 * This file is part of the Symfony bundle Seven/Rpc.
 *
 * (c) Sergey Kolodyazhnyy <sergey.kolodyazhnyy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Seven\RpcBundle\XmlRpc\ValueType;

class BooleanType extends AbstractType
{
    /**
     * @param \DOMDocument $document
     * @param $value
     * @return \DOMElement
     */

    public function pack(\DOMDocument $document, $value)
    {
        return $this->wrap($document->createElement("boolean", $value ? "1" : "0"), "value");
    }

    /**
     * @param  \DOMElement $element
     * @return bool
     */

    public function extract(\DOMElement $element)
    {
        return (bool) ((int) $element->nodeValue);
    }

}
