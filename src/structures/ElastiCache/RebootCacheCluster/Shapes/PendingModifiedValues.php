<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumCacheNodes
 * @property list<string>|null $CacheNodeIdsToRemove
 * @property string|null $EngineVersion
 * @property string|null $CacheNodeType
 * @property 'SETTING'|'ROTATING'|null $AuthTokenStatus
 * @property list<PendingLogDeliveryConfiguration>|null $LogDeliveryConfigurations
 * @property bool|null $TransitEncryptionEnabled
 * @property 'preferred'|'required'|null $TransitEncryptionMode
 * @property ScaleConfig|null $ScaleConfig
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     NumCacheNodes?: int|null,
     *     CacheNodeIdsToRemove?: list<string>|null,
     *     EngineVersion?: string|null,
     *     CacheNodeType?: string|null,
     *     AuthTokenStatus?: 'SETTING'|'ROTATING'|null,
     *     LogDeliveryConfigurations?: list<PendingLogDeliveryConfiguration>|null,
     *     TransitEncryptionEnabled?: bool|null,
     *     TransitEncryptionMode?: 'preferred'|'required'|null,
     *     ScaleConfig?: ScaleConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
