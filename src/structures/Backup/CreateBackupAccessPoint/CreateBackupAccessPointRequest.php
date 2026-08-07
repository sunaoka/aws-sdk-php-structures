<?php

namespace Sunaoka\Aws\Structures\Backup\CreateBackupAccessPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $AccessPointMetadata
 * @property string|null $AccessPointPolicy
 * @property string $Name
 * @property string $RecoveryPointArn
 * @property array<string, string>|null $Tags
 */
class CreateBackupAccessPointRequest extends Request
{
    /**
     * @param array{
     *     AccessPointMetadata?: array<string, string>|null,
     *     AccessPointPolicy?: string|null,
     *     Name: string,
     *     RecoveryPointArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
