<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $runAsUser
 * @property int|null $runAsGroup
 * @property bool|null $privileged
 * @property bool|null $allowPrivilegeEscalation
 * @property bool|null $readOnlyRootFilesystem
 * @property bool|null $runAsNonRoot
 * @property EksContainerLinuxCapabilities|null $capabilities
 * @property EksSeccompProfile|null $seccompProfile
 */
class EksContainerSecurityContext extends Shape
{
    /**
     * @param array{
     *     runAsUser?: int|null,
     *     runAsGroup?: int|null,
     *     privileged?: bool|null,
     *     allowPrivilegeEscalation?: bool|null,
     *     readOnlyRootFilesystem?: bool|null,
     *     runAsNonRoot?: bool|null,
     *     capabilities?: EksContainerLinuxCapabilities|null,
     *     seccompProfile?: EksSeccompProfile|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
