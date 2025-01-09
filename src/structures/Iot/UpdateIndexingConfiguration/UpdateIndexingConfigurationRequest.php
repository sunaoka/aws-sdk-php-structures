<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ThingIndexingConfiguration $thingIndexingConfiguration
 * @property Shapes\ThingGroupIndexingConfiguration $thingGroupIndexingConfiguration
 */
class UpdateIndexingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     thingIndexingConfiguration?: Shapes\ThingIndexingConfiguration,
     *     thingGroupIndexingConfiguration?: Shapes\ThingGroupIndexingConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
