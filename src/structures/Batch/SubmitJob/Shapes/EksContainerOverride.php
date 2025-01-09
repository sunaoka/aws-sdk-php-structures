<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $image
 * @property list<string> $command
 * @property list<string> $args
 * @property list<EksContainerEnvironmentVariable> $env
 * @property EksContainerResourceRequirements $resources
 */
class EksContainerOverride extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     image?: string,
     *     command?: list<string>,
     *     args?: list<string>,
     *     env?: list<EksContainerEnvironmentVariable>,
     *     resources?: EksContainerResourceRequirements
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
