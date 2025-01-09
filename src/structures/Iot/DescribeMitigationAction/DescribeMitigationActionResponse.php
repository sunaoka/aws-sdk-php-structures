<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $actionName
 * @property 'UPDATE_DEVICE_CERTIFICATE'|'UPDATE_CA_CERTIFICATE'|'ADD_THINGS_TO_THING_GROUP'|'REPLACE_DEFAULT_POLICY_VERSION'|'ENABLE_IOT_LOGGING'|'PUBLISH_FINDING_TO_SNS' $actionType
 * @property string $actionArn
 * @property string $actionId
 * @property string $roleArn
 * @property Shapes\MitigationActionParams $actionParams
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class DescribeMitigationActionResponse extends Response
{
}
