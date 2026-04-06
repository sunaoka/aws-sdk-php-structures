<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CodeStarSourceConnection' $providerType
 * @property GitConfiguration $gitConfiguration
 */
class PipelineTriggerDeclaration extends Shape
{
    /**
     * @param array{
     *     providerType: 'CodeStarSourceConnection',
     *     gitConfiguration: GitConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
