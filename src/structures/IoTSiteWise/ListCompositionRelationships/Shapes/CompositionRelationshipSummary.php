<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListCompositionRelationships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetModelId
 * @property string $assetModelCompositeModelId
 * @property string $assetModelCompositeModelType
 */
class CompositionRelationshipSummary extends Shape
{
    /**
     * @param array{
     *     assetModelId: string,
     *     assetModelCompositeModelId: string,
     *     assetModelCompositeModelType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
