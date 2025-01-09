<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $blocksize
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $dataSetName
 * @property Shapes\DatasetDetailOrgAttributes $dataSetOrg
 * @property int $fileSize
 * @property \Aws\Api\DateTimeResult $lastReferencedTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedTime
 * @property string $location
 * @property int $recordLength
 */
class GetDataSetDetailsResponse extends Response
{
}
