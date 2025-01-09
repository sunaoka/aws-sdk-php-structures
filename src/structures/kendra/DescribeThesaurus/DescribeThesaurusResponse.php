<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeThesaurus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED' $Status
 * @property string $ErrorMessage
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $RoleArn
 * @property Shapes\S3Path $SourceS3Path
 * @property int $FileSizeBytes
 * @property int $TermCount
 * @property int $SynonymRuleCount
 */
class DescribeThesaurusResponse extends Response
{
}
