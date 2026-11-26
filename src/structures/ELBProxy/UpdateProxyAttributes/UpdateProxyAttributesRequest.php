<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property list<Shapes\Attribute> $attributes
 */
class UpdateProxyAttributesRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     attributes: list<Shapes\Attribute>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
