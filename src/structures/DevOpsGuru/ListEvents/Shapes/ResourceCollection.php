<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCollection $CloudFormation
 * @property list<TagCollection> $Tags
 */
class ResourceCollection extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCollection,
     *     Tags?: list<TagCollection>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
