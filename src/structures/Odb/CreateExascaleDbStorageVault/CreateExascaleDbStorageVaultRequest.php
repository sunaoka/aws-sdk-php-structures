<?php

namespace Sunaoka\Aws\Structures\Odb\CreateExascaleDbStorageVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property int<0, max> $highCapacityDatabaseStorageTotalSizeInGBs
 * @property int<0, max>|null $additionalFlashCacheInPercent
 * @property int<0, max>|null $autoscaleLimitInGBs
 * @property string|null $availabilityZoneId
 * @property string|null $availabilityZone
 * @property string|null $description
 * @property bool|null $isAutoscaleEnabled
 * @property array<string, string>|null $tags
 * @property string|null $timeZone
 * @property string|null $clientToken
 */
class CreateExascaleDbStorageVaultRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     highCapacityDatabaseStorageTotalSizeInGBs: int<0, max>,
     *     additionalFlashCacheInPercent?: int<0, max>|null,
     *     autoscaleLimitInGBs?: int<0, max>|null,
     *     availabilityZoneId?: string|null,
     *     availabilityZone?: string|null,
     *     description?: string|null,
     *     isAutoscaleEnabled?: bool|null,
     *     tags?: array<string, string>|null,
     *     timeZone?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
