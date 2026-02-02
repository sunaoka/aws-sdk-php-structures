<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListDeploymentPatternVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'updateFromVersion' $name
 * @property list<string> $values
 */
class DeploymentPatternVersionFilter extends Shape
{
    /**
     * @param array{
     *     name: 'updateFromVersion',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
