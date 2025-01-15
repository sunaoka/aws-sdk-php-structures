<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $image
 * @property list<string>|null $command
 * @property list<string>|null $args
 * @property list<EksContainerEnvironmentVariable>|null $env
 * @property EksContainerResourceRequirements|null $resources
 */
class EksContainerOverride extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     image?: string|null,
     *     command?: list<string>|null,
     *     args?: list<string>|null,
     *     env?: list<EksContainerEnvironmentVariable>|null,
     *     resources?: EksContainerResourceRequirements|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
