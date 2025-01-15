<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UpdateCloudFormationCollectionFilter|null $CloudFormation
 * @property list<UpdateTagCollectionFilter>|null $Tags
 */
class UpdateResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: UpdateCloudFormationCollectionFilter|null,
     *     Tags?: list<UpdateTagCollectionFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
