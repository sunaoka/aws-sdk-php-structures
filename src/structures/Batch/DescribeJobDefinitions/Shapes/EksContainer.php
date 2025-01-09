<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $image
 * @property string $imagePullPolicy
 * @property list<string> $command
 * @property list<string> $args
 * @property list<EksContainerEnvironmentVariable> $env
 * @property EksContainerResourceRequirements $resources
 * @property list<EksContainerVolumeMount> $volumeMounts
 * @property EksContainerSecurityContext $securityContext
 */
class EksContainer extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     image: string,
     *     imagePullPolicy?: string,
     *     command?: list<string>,
     *     args?: list<string>,
     *     env?: list<EksContainerEnvironmentVariable>,
     *     resources?: EksContainerResourceRequirements,
     *     volumeMounts?: list<EksContainerVolumeMount>,
     *     securityContext?: EksContainerSecurityContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
