<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $blocksize
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string $dataSetName
 * @property Shapes\DatasetDetailOrgAttributes|null $dataSetOrg
 * @property int|null $fileSize
 * @property \Aws\Api\DateTimeResult|null $lastReferencedTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property string|null $location
 * @property int|null $recordLength
 */
class GetDataSetDetailsResponse extends Response
{
}
