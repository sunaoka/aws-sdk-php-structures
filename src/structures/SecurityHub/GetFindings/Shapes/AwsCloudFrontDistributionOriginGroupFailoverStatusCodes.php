<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int> $Items
 * @property int $Quantity
 */
class AwsCloudFrontDistributionOriginGroupFailoverStatusCodes extends Shape
{
    /**
     * @param array{
     *     Items?: list<int>,
     *     Quantity?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
