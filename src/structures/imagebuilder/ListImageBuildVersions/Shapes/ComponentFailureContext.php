<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListImageBuildVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentArn
 * @property string|null $phaseName
 * @property string|null $stepName
 * @property string|null $action
 * @property string|null $errorMessage
 */
class ComponentFailureContext extends Shape
{
    /**
     * @param array{
     *     componentArn?: string|null,
     *     phaseName?: string|null,
     *     stepName?: string|null,
     *     action?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
