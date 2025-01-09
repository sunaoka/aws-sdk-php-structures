<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Location
 * @property string $IpAddress
 * @property bool $IsNewForEntireAccount
 */
class NewGeolocationDetail extends Shape
{
    /**
     * @param array{
     *     Location?: string,
     *     IpAddress?: string,
     *     IsNewForEntireAccount?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
