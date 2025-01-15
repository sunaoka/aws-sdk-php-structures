<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'volume' $resourceType
 * @property list<Tag>|null $tags
 * @property 'TASK_DEFINITION'|'SERVICE'|'NONE'|null $propagateTags
 */
class EBSTagSpecification extends Shape
{
    /**
     * @param array{
     *     resourceType: 'volume',
     *     tags?: list<Tag>|null,
     *     propagateTags?: 'TASK_DEFINITION'|'SERVICE'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
