<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetId
 * @property string $datasetArn
 * @property string $datasetName
 * @property string $datasetDescription
 * @property 'SESSION'|'CURATED'|'EXTERNAL'|null $datasetType
 * @property Shapes\DatasetConfig|null $datasetConfig
 * @property string|null $workspaceName
 * @property array<string, string>|null $metadata
 * @property Shapes\DatasetSource $datasetSource
 * @property Shapes\DatasetStatus $datasetStatus
 * @property \Aws\Api\DateTimeResult $datasetCreationDate
 * @property \Aws\Api\DateTimeResult $datasetLastUpdateDate
 * @property string|null $datasetVersion
 * @property Shapes\DatasetEnrichment|null $enrichmentStatus
 */
class DescribeDatasetResponse extends Response
{
}
