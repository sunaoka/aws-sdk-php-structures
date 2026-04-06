<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BackupRetentionPolicy|null $BackupRetentionPolicy
 * @property string $HsmType
 * @property string|null $SourceBackupId
 * @property list<string> $SubnetIds
 * @property 'IPV4'|'DUALSTACK'|null $NetworkType
 * @property list<Shapes\Tag>|null $TagList
 * @property 'FIPS'|'NON_FIPS'|null $Mode
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     BackupRetentionPolicy?: Shapes\BackupRetentionPolicy|null,
     *     HsmType: string,
     *     SourceBackupId?: string|null,
     *     SubnetIds: list<string>,
     *     NetworkType?: 'IPV4'|'DUALSTACK'|null,
     *     TagList?: list<Shapes\Tag>|null,
     *     Mode?: 'FIPS'|'NON_FIPS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
