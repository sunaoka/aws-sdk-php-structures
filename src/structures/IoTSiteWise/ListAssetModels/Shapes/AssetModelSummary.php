<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $externalId
 * @property string $arn
 * @property string $name
 * @property 'ASSET_MODEL'|'COMPONENT_MODEL'|'INTERFACE'|null $assetModelType
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property AssetModelStatus $status
 * @property string|null $version
 */
class AssetModelSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     externalId?: string|null,
     *     arn: string,
     *     name: string,
     *     assetModelType?: 'ASSET_MODEL'|'COMPONENT_MODEL'|'INTERFACE'|null,
     *     description: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: AssetModelStatus,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
