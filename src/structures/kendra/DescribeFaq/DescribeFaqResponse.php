<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeFaq;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property Shapes\S3Path $S3Path
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property string $RoleArn
 * @property string $ErrorMessage
 * @property 'CSV'|'CSV_WITH_HEADER'|'JSON' $FileFormat
 * @property string $LanguageCode
 */
class DescribeFaqResponse extends Response
{
}
