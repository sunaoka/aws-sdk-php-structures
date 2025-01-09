<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $image
 * @property string $imagePullPolicy
 * @property list<string> $command
 * @property list<string> $args
 * @property list<EksContainerEnvironmentVariable> $env
 * @property EksContainerResourceRequirements $resources
 * @property int $exitCode
 * @property string $reason
 * @property list<EksContainerVolumeMount> $volumeMounts
 * @property EksContainerSecurityContext $securityContext
 */
class EksContainerDetail extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     image?: string,
     *     imagePullPolicy?: string,
     *     command?: list<string>,
     *     args?: list<string>,
     *     env?: list<EksContainerEnvironmentVariable>,
     *     resources?: EksContainerResourceRequirements,
     *     exitCode?: int,
     *     reason?: string,
     *     volumeMounts?: list<EksContainerVolumeMount>,
     *     securityContext?: EksContainerSecurityContext
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
