<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudFormationCollection|null $CloudFormation
 * @property list<TagCollection>|null $Tags
 */
class ResourceCollection extends Shape
{
    /**
     * @param array{
     *     CloudFormation?: CloudFormationCollection|null,
     *     Tags?: list<TagCollection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
