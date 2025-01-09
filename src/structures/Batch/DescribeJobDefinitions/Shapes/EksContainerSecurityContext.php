<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $runAsUser
 * @property int $runAsGroup
 * @property bool $privileged
 * @property bool $allowPrivilegeEscalation
 * @property bool $readOnlyRootFilesystem
 * @property bool $runAsNonRoot
 */
class EksContainerSecurityContext extends Shape
{
    /**
     * @param array{
     *     runAsUser?: int,
     *     runAsGroup?: int,
     *     privileged?: bool,
     *     allowPrivilegeEscalation?: bool,
     *     readOnlyRootFilesystem?: bool,
     *     runAsNonRoot?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
