<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $versionRequirement
 * @property 'HARD'|'SOFT'|null $dependencyType
 */
class ComponentDependencyRequirement extends Shape
{
    /**
     * @param array{
     *     versionRequirement?: string|null,
     *     dependencyType?: 'HARD'|'SOFT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
