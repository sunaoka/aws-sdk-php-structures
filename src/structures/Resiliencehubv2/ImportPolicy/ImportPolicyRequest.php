<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $v1PolicyArn
 * @property string|null $kmsKeyId
 * @property Shapes\AvailabilitySlo|null $availabilitySlo
 * @property 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null $multiAzDisasterRecoveryApproach
 * @property 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null $multiRegionDisasterRecoveryApproach
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class ImportPolicyRequest extends Request
{
    /**
     * @param array{
     *     v1PolicyArn: string,
     *     kmsKeyId?: string|null,
     *     availabilitySlo?: Shapes\AvailabilitySlo|null,
     *     multiAzDisasterRecoveryApproach?: 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null,
     *     multiRegionDisasterRecoveryApproach?: 'ACTIVE_ACTIVE'|'HOT_STANDBY'|'WARM_STANDBY'|'PILOT_LIGHT'|'BACKUP_AND_RESTORE'|null,
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
