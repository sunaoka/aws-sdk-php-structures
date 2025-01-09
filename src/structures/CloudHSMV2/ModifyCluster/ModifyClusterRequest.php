<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HsmType
 * @property Shapes\BackupRetentionPolicy $BackupRetentionPolicy
 * @property string $ClusterId
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     HsmType?: string,
     *     BackupRetentionPolicy?: Shapes\BackupRetentionPolicy,
     *     ClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
