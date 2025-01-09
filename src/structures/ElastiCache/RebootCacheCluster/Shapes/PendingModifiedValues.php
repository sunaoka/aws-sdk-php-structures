<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumCacheNodes
 * @property list<string> $CacheNodeIdsToRemove
 * @property string $EngineVersion
 * @property string $CacheNodeType
 * @property 'SETTING'|'ROTATING' $AuthTokenStatus
 * @property list<PendingLogDeliveryConfiguration> $LogDeliveryConfigurations
 * @property bool $TransitEncryptionEnabled
 * @property 'preferred'|'required' $TransitEncryptionMode
 */
class PendingModifiedValues extends Shape
{
    /**
     * @param array{
     *     NumCacheNodes?: int,
     *     CacheNodeIdsToRemove?: list<string>,
     *     EngineVersion?: string,
     *     CacheNodeType?: string,
     *     AuthTokenStatus?: 'SETTING'|'ROTATING',
     *     LogDeliveryConfigurations?: list<PendingLogDeliveryConfiguration>,
     *     TransitEncryptionEnabled?: bool,
     *     TransitEncryptionMode?: 'preferred'|'required'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
