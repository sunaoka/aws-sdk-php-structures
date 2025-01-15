<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaArn
 * @property string|null $componentName
 * @property string|null $componentVersion
 * @property list<ComponentPlatform>|null $componentPlatforms
 * @property array<string, ComponentDependencyRequirement>|null $componentDependencies
 * @property LambdaExecutionParameters|null $componentLambdaParameters
 */
class LambdaFunctionRecipeSource extends Shape
{
    /**
     * @param array{
     *     lambdaArn: string,
     *     componentName?: string|null,
     *     componentVersion?: string|null,
     *     componentPlatforms?: list<ComponentPlatform>|null,
     *     componentDependencies?: array<string, ComponentDependencyRequirement>|null,
     *     componentLambdaParameters?: LambdaExecutionParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
