<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datasetId
 * @property string $datasetArn
 * @property string $datasetName
 * @property string $datasetDescription
 * @property Shapes\DatasetSource $datasetSource
 * @property Shapes\DatasetStatus $datasetStatus
 * @property \Aws\Api\DateTimeResult $datasetCreationDate
 * @property \Aws\Api\DateTimeResult $datasetLastUpdateDate
 * @property string $datasetVersion
 */
class DescribeDatasetResponse extends Response
{
}
