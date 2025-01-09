<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCloudFormationCollectionFilter $CloudFormation
 * @property list<UpdateTagCollectionFilter> $Tags
 */
class UpdateResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: UpdateCloudFormationCollectionFilter,
     *     Tags?: list<UpdateTagCollectionFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
