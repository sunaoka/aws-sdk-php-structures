<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssociatedAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $assetModelId
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastUpdateDate
 * @property AssetStatus $status
 * @property list<AssetHierarchy> $hierarchies
 * @property string|null $description
 * @property string|null $externalId
 */
class AssociatedAssetsSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     assetModelId: string,
     *     creationDate: \Aws\Api\DateTimeResult,
     *     lastUpdateDate: \Aws\Api\DateTimeResult,
     *     status: AssetStatus,
     *     hierarchies: list<AssetHierarchy>,
     *     description?: string|null,
     *     externalId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
