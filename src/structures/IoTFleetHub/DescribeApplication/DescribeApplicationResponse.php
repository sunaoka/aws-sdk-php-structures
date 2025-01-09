<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\DescribeApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $applicationArn
 * @property string $applicationName
 * @property string $applicationDescription
 * @property string $applicationUrl
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'CREATE_FAILED'|'DELETE_FAILED' $applicationState
 * @property int $applicationCreationDate
 * @property int $applicationLastUpdateDate
 * @property string $roleArn
 * @property string $ssoClientId
 * @property string $errorMessage
 * @property array<string, string> $tags
 */
class DescribeApplicationResponse extends Response
{
}
