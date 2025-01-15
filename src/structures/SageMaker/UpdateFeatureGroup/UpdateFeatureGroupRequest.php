<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property list<Shapes\FeatureDefinition>|null $FeatureAdditions
 * @property Shapes\OnlineStoreConfigUpdate|null $OnlineStoreConfig
 * @property Shapes\ThroughputConfigUpdate|null $ThroughputConfig
 */
class UpdateFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureAdditions?: list<Shapes\FeatureDefinition>|null,
     *     OnlineStoreConfig?: Shapes\OnlineStoreConfigUpdate|null,
     *     ThroughputConfig?: Shapes\ThroughputConfigUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
