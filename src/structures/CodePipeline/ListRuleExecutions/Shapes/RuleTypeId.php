<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListRuleExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Rule' $category
 * @property 'AWS' $owner
 * @property string $provider
 * @property string $version
 */
class RuleTypeId extends Shape
{
    /**
     * @param array{
     *     category: 'Rule',
     *     owner?: 'AWS',
     *     provider: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
