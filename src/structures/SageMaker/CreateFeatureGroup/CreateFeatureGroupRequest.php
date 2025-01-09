<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierFeatureName
 * @property string $EventTimeFeatureName
 * @property list<Shapes\FeatureDefinition> $FeatureDefinitions
 * @property Shapes\OnlineStoreConfig $OnlineStoreConfig
 * @property Shapes\OfflineStoreConfig $OfflineStoreConfig
 * @property Shapes\ThroughputConfig $ThroughputConfig
 * @property string $RoleArn
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierFeatureName: string,
     *     EventTimeFeatureName: string,
     *     FeatureDefinitions: list<Shapes\FeatureDefinition>,
     *     OnlineStoreConfig?: Shapes\OnlineStoreConfig,
     *     OfflineStoreConfig?: Shapes\OfflineStoreConfig,
     *     ThroughputConfig?: Shapes\ThroughputConfig,
     *     RoleArn?: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
