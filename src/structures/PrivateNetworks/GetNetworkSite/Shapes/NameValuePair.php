<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetNetworkSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $value
 */
class NameValuePair extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
