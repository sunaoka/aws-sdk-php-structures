<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 * @property string $componentName
 * @property string $componentVersion
 * @property list<ComponentPlatform> $componentPlatforms
 * @property array<string, ComponentDependencyRequirement> $componentDependencies
 * @property LambdaExecutionParameters $componentLambdaParameters
 */
class LambdaFunctionRecipeSource extends Shape
{
    /**
     * @param array{
     *     lambdaArn: string,
     *     componentName?: string,
     *     componentVersion?: string,
     *     componentPlatforms?: list<ComponentPlatform>,
     *     componentDependencies?: array<string, ComponentDependencyRequirement>,
     *     componentLambdaParameters?: LambdaExecutionParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
