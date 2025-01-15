<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeThesaurus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $IndexId
 * @property string|null $Name
 * @property string|null $Description
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'UPDATING'|'ACTIVE_BUT_UPDATE_FAILED'|'FAILED'|null $Status
 * @property string|null $ErrorMessage
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $RoleArn
 * @property Shapes\S3Path|null $SourceS3Path
 * @property int|null $FileSizeBytes
 * @property int|null $TermCount
 * @property int|null $SynonymRuleCount
 */
class DescribeThesaurusResponse extends Response
{
}
