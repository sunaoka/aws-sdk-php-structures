<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workspace
 * @property list<IotTwinMakerSourceConfigurationFilter>|null $filters
 */
class IotTwinMakerSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     workspace: string,
     *     filters?: list<IotTwinMakerSourceConfigurationFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
