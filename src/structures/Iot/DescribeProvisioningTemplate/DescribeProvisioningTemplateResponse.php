<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $templateArn
 * @property string $templateName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property int $defaultVersionId
 * @property string $templateBody
 * @property bool $enabled
 * @property string $provisioningRoleArn
 * @property Shapes\ProvisioningHook $preProvisioningHook
 * @property 'FLEET_PROVISIONING'|'JITP' $type
 */
class DescribeProvisioningTemplateResponse extends Response
{
}
