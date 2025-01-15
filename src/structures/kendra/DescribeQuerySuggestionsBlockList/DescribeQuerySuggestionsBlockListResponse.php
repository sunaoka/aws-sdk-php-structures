<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeQuerySuggestionsBlockList;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $IndexId
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null $Status
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property Shapes\S3Path|null $SourceS3Path
 * @property int|null $ItemCount
 * @property int|null $FileSizeBytes
 * @property string|null $RoleArn
 */
class DescribeQuerySuggestionsBlockListResponse extends Response
{
}
