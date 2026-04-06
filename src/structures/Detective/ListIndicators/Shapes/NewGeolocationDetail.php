<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Location
 * @property string|null $IpAddress
 * @property bool|null $IsNewForEntireAccount
 */
class NewGeolocationDetail extends Shape
{
    /**
     * @param array{
     *     Location?: string|null,
     *     IpAddress?: string|null,
     *     IsNewForEntireAccount?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
