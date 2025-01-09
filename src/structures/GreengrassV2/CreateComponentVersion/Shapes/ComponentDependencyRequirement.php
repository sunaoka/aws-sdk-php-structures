<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateComponentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionRequirement
 * @property 'HARD'|'SOFT' $dependencyType
 */
class ComponentDependencyRequirement extends Shape
{
    /**
     * @param array{
     *     versionRequirement?: string,
     *     dependencyType?: 'HARD'|'SOFT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
