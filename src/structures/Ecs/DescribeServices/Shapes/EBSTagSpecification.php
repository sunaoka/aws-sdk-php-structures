<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'volume' $resourceType
 * @property list<Tag> $tags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE' $propagateTags
 */
class EBSTagSpecification extends Shape
{
    /**
     * @param array{
     *     resourceType: 'volume',
     *     tags?: list<Tag>,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
