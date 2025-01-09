<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BackupRetentionPolicy $BackupRetentionPolicy
 * @property string $HsmType
 * @property string $SourceBackupId
 * @property list<string> $SubnetIds
 * @property 'IPV4'|'DUALSTACK' $NetworkType
 * @property list<Shapes\Tag> $TagList
 * @property 'FIPS'|'NON_FIPS' $Mode
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     BackupRetentionPolicy?: Shapes\BackupRetentionPolicy,
     *     HsmType: string,
     *     SourceBackupId?: string,
     *     SubnetIds: list<string>,
     *     NetworkType?: 'IPV4'|'DUALSTACK',
     *     TagList?: list<Shapes\Tag>,
     *     Mode?: 'FIPS'|'NON_FIPS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
