<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateFeatureGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property list<Shapes\FeatureDefinition>|null $FeatureAdditions
 * @property Shapes\OnlineStoreConfigUpdate|null $OnlineStoreConfig
 */
class UpdateFeatureGroupRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     FeatureAdditions?: list<Shapes\FeatureDefinition>|null,
     *     OnlineStoreConfig?: Shapes\OnlineStoreConfigUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
