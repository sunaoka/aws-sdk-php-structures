<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\ModifyCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $HsmType
 * @property Shapes\BackupRetentionPolicy|null $BackupRetentionPolicy
 * @property string $ClusterId
 */
class ModifyClusterRequest extends Request
{
    /**
     * @param array{
     *     HsmType?: string|null,
     *     BackupRetentionPolicy?: Shapes\BackupRetentionPolicy|null,
     *     ClusterId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
