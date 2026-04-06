<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutStorageConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE' $storageType
 * @property Shapes\MultiLayerStorage|null $multiLayerStorage
 * @property 'ENABLED'|'DISABLED'|null $disassociatedDataStorage
 * @property Shapes\RetentionPeriod|null $retentionPeriod
 */
class PutStorageConfigurationRequest extends Request
{
    /**
     * @param array{
     *     storageType: 'SITEWISE_DEFAULT_STORAGE'|'MULTI_LAYER_STORAGE',
     *     multiLayerStorage?: Shapes\MultiLayerStorage|null,
     *     disassociatedDataStorage?: 'ENABLED'|'DISABLED'|null,
     *     retentionPeriod?: Shapes\RetentionPeriod|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
