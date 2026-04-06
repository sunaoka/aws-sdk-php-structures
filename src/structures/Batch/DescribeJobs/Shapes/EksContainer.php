<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string $image
 * @property string|null $imagePullPolicy
 * @property list<string>|null $command
 * @property list<string>|null $args
 * @property list<EksContainerEnvironmentVariable>|null $env
 * @property EksContainerResourceRequirements|null $resources
 * @property list<EksContainerVolumeMount>|null $volumeMounts
 * @property EksContainerSecurityContext|null $securityContext
 */
class EksContainer extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     image: string,
     *     imagePullPolicy?: string|null,
     *     command?: list<string>|null,
     *     args?: list<string>|null,
     *     env?: list<EksContainerEnvironmentVariable>|null,
     *     resources?: EksContainerResourceRequirements|null,
     *     volumeMounts?: list<EksContainerVolumeMount>|null,
     *     securityContext?: EksContainerSecurityContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
