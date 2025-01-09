<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Type
 * @property string $IpAddress
 */
class RelatedFindingDetail extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Type?: string,
     *     IpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
