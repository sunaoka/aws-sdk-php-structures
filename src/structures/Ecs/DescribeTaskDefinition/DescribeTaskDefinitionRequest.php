<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskDefinition
 * @property list<'TAGS'>|null $include
 */
class DescribeTaskDefinitionRequest extends Request
{
    /**
     * @param array{
     *     taskDefinition: string,
     *     include?: list<'TAGS'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
