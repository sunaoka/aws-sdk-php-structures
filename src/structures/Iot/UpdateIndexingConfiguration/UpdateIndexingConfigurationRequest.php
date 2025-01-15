<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateIndexingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ThingIndexingConfiguration|null $thingIndexingConfiguration
 * @property Shapes\ThingGroupIndexingConfiguration|null $thingGroupIndexingConfiguration
 */
class UpdateIndexingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     thingIndexingConfiguration?: Shapes\ThingIndexingConfiguration|null,
     *     thingGroupIndexingConfiguration?: Shapes\ThingGroupIndexingConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
