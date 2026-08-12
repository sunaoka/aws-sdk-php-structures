<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExascaleDbStorageVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exascaleDbStorageVaultId
 * @property int<0, max>|null $additionalFlashCacheInPercent
 * @property int<0, max>|null $autoscaleLimitInGBs
 * @property string|null $description
 * @property string|null $displayName
 * @property int<0, max>|null $highCapacityDatabaseStorageTotalSizeInGBs
 * @property bool|null $isAutoscaleEnabled
 */
class UpdateExascaleDbStorageVaultRequest extends Request
{
    /**
     * @param array{
     *     exascaleDbStorageVaultId: string,
     *     additionalFlashCacheInPercent?: int<0, max>|null,
     *     autoscaleLimitInGBs?: int<0, max>|null,
     *     description?: string|null,
     *     displayName?: string|null,
     *     highCapacityDatabaseStorageTotalSizeInGBs?: int<0, max>|null,
     *     isAutoscaleEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
