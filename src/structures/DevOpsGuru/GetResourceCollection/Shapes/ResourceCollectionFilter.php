<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetResourceCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCollectionFilter $CloudFormation
 * @property list<TagCollectionFilter> $Tags
 */
class ResourceCollectionFilter extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCollectionFilter,
     *     Tags?: list<TagCollectionFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
