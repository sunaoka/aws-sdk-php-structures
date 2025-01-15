<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFaq;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $IndexId
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property Shapes\S3Path|null $S3Path
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property string|null $RoleArn
 * @property string|null $ErrorMessage
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON'|null $FileFormat
 * @property string|null $LanguageCode
 */
class DescribeFaqResponse extends Response
{
}
