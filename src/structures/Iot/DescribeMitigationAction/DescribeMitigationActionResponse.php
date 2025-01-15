<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $actionName
 * @property 'UPDATE_DEVICE_CERTIFICATE'|'UPDATE_CA_CERTIFICATE'|'ADD_THINGS_TO_THING_GROUP'|'REPLACE_DEFAULT_POLICY_VERSION'|'ENABLE_IOT_LOGGING'|'PUBLISH_FINDING_TO_SNS'|null $actionType
 * @property string|null $actionArn
 * @property string|null $actionId
 * @property string|null $roleArn
 * @property Shapes\MitigationActionParams|null $actionParams
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeMitigationActionResponse extends Response
{
}
