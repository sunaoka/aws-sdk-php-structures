<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IndexId
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property Shapes\S3Path $SourceS3Path
 * @property int $ItemCount
 * @property int $FileSizeBytes
 * @property string $RoleArn
 */
class DescribeQuerySuggestionsBlockListResponse extends Response
{
}
