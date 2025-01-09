<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property list<Shapes\FeatureDefinition> $FeatureAdditions
 * @property Shapes\OnlineStoreConfigUpdate $OnlineStoreConfig
 * @property Shapes\ThroughputConfigUpdate $ThroughputConfig
 */
class UpdateFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureAdditions?: list<Shapes\FeatureDefinition>,
     *     OnlineStoreConfig?: Shapes\OnlineStoreConfigUpdate,
     *     ThroughputConfig?: Shapes\ThroughputConfigUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
