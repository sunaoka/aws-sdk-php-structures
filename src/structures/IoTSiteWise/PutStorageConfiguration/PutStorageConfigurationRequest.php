<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage $multiLayerStorage
 * @property 'ENABLED'|'DISABLED' $disassociatedDataStorage
 * @property Shapes\RetentionPeriod $retentionPeriod
 * @property 'ENABLED'|'DISABLED' $warmTier
 * @property Shapes\WarmTierRetentionPeriod $warmTierRetentionPeriod
 */
class PutStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     storageType: 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE',
     *     multiLayerStorage?: Shapes\MultiLayerStorage,
     *     disassociatedDataStorage?: 'ENABLED'|'DISABLED',
     *     retentionPeriod?: Shapes\RetentionPeriod,
     *     warmTier?: 'ENABLED'|'DISABLED',
     *     warmTierRetentionPeriod?: Shapes\WarmTierRetentionPeriod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
