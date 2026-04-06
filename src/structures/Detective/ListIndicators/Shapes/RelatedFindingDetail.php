<?php

namespace Sunaoka\Aws\Structures\Detective\ListIndicators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Type
 * @property string|null $IpAddress
 */
class RelatedFindingDetail extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Type?: string|null,
     *     IpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
