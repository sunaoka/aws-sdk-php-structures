<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelActivity|null $channel
 * @property LambdaActivity|null $lambda
 * @property DatastoreActivity|null $datastore
 * @property AddAttributesActivity|null $addAttributes
 * @property RemoveAttributesActivity|null $removeAttributes
 * @property SelectAttributesActivity|null $selectAttributes
 * @property FilterActivity|null $filter
 * @property MathActivity|null $math
 * @property DeviceRegistryEnrichActivity|null $deviceRegistryEnrich
 * @property DeviceShadowEnrichActivity|null $deviceShadowEnrich
 */
class PipelineActivity extends Shape
{
    /**
     * @param array{
     *     channel?: ChannelActivity|null,
     *     lambda?: LambdaActivity|null,
     *     datastore?: DatastoreActivity|null,
     *     addAttributes?: AddAttributesActivity|null,
     *     removeAttributes?: RemoveAttributesActivity|null,
     *     selectAttributes?: SelectAttributesActivity|null,
     *     filter?: FilterActivity|null,
     *     math?: MathActivity|null,
     *     deviceRegistryEnrich?: DeviceRegistryEnrichActivity|null,
     *     deviceShadowEnrich?: DeviceShadowEnrichActivity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
