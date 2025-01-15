<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int>|null $Items
 * @property int|null $Quantity
 */
class AwsCloudFrontDistributionOriginGroupFailoverStatusCodes extends Shape
{
    /**
     * @param array{
     *     Items?: list<int>|null,
     *     Quantity?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
