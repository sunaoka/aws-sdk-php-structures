<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelActivity $channel
 * @property LambdaActivity $lambda
 * @property DatastoreActivity $datastore
 * @property AddAttributesActivity $addAttributes
 * @property RemoveAttributesActivity $removeAttributes
 * @property SelectAttributesActivity $selectAttributes
 * @property FilterActivity $filter
 * @property MathActivity $math
 * @property DeviceRegistryEnrichActivity $deviceRegistryEnrich
 * @property DeviceShadowEnrichActivity $deviceShadowEnrich
 */
class PipelineActivity extends Shape
{
    /**
     * @param array{
     *     channel?: ChannelActivity,
     *     lambda?: LambdaActivity,
     *     datastore?: DatastoreActivity,
     *     addAttributes?: AddAttributesActivity,
     *     removeAttributes?: RemoveAttributesActivity,
     *     selectAttributes?: SelectAttributesActivity,
     *     filter?: FilterActivity,
     *     math?: MathActivity,
     *     deviceRegistryEnrich?: DeviceRegistryEnrichActivity,
     *     deviceShadowEnrich?: DeviceShadowEnrichActivity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
