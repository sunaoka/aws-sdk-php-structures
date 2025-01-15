<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCollectionFilter|null $CloudFormation
 * @property list<TagCollectionFilter>|null $Tags
 */
class ResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCollectionFilter|null,
     *     Tags?: list<TagCollectionFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
