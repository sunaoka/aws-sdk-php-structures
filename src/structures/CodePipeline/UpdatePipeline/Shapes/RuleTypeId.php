<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Rule' $category
 * @property 'AWS'|null $owner
 * @property string $provider
 * @property string|null $version
 */
class RuleTypeId extends Shape
{
    /**
     * @param array{
     *     category: 'Rule',
     *     owner?: 'AWS'|null,
     *     provider: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
