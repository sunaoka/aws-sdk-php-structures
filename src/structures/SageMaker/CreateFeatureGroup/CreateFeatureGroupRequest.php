<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierFeatureName
 * @property string $EventTimeFeatureName
 * @property list<Shapes\FeatureDefinition> $FeatureDefinitions
 * @property Shapes\OnlineStoreConfig|null $OnlineStoreConfig
 * @property Shapes\OfflineStoreConfig|null $OfflineStoreConfig
 * @property Shapes\ThroughputConfig|null $ThroughputConfig
 * @property string|null $RoleArn
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierFeatureName: string,
     *     EventTimeFeatureName: string,
     *     FeatureDefinitions: list<Shapes\FeatureDefinition>,
     *     OnlineStoreConfig?: Shapes\OnlineStoreConfig|null,
     *     OfflineStoreConfig?: Shapes\OfflineStoreConfig|null,
     *     ThroughputConfig?: Shapes\ThroughputConfig|null,
     *     RoleArn?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
