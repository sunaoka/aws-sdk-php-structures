<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage|null $multiLayerStorage
 * @property 'ENABLED'|'DISABLED'|null $disassociatedDataStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 * @property 'ENABLED'|'DISABLED'|null $warmTier
 * @property Shapes\WarmTierRetentionPeriod|null $warmTierRetentionPeriod
 */
class PutStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     storageType: 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE',
     *     multiLayerStorage?: Shapes\MultiLayerStorage|null,
     *     disassociatedDataStorage?: 'ENABLED'|'DISABLED'|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null,
     *     warmTier?: 'ENABLED'|'DISABLED'|null,
     *     warmTierRetentionPeriod?: Shapes\WarmTierRetentionPeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
