<?php

namespace Sunaoka\Aws\Structures\Athena\GetSystemTableConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ALL'|null $TableName
 * @property string|null $KmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastModifiedAt
 */
class GetSystemTableConfigurationResponse extends Response
{
}
