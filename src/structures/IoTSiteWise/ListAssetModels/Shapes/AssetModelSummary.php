<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property AssetModelStatus $status
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL'|null $assetModelType
 * @property string|null $externalId
 */
class AssetModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     description: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: AssetModelStatus,
     *     assetModelType?: 'ASSET_MODEL'|'COMPONENT_MODEL'|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
