<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateWorkspaceInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null $VolumeType
 * @property bool|null $Encrypted
 * @property string|null $KmsKeyId
 * @property int<0, max>|null $Iops
 * @property int<0, max>|null $Throughput
 * @property int<0, max>|null $VolumeSize
 */
class EbsBlockDevice extends Shape
{
    /**
     * @param array{
     *     VolumeType?: 'standard'|'io1'|'io2'|'gp2'|'sc1'|'st1'|'gp3'|null,
     *     Encrypted?: bool|null,
     *     KmsKeyId?: string|null,
     *     Iops?: int<0, max>|null,
     *     Throughput?: int<0, max>|null,
     *     VolumeSize?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
