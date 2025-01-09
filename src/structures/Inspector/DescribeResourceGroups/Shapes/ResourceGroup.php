<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeResourceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property list<ResourceGroupTag> $tags
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class ResourceGroup extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     tags: list<ResourceGroupTag>,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
