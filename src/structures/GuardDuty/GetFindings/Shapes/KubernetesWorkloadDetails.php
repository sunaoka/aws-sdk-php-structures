<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Type
 * @property string|null $Uid
 * @property string|null $Namespace
 * @property bool|null $HostNetwork
 * @property list<Container>|null $Containers
 * @property list<Volume>|null $Volumes
 */
class KubernetesWorkloadDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: string|null,
     *     Uid?: string|null,
     *     Namespace?: string|null,
     *     HostNetwork?: bool|null,
     *     Containers?: list<Container>|null,
     *     Volumes?: list<Volume>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
