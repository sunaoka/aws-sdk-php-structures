<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeProvisioningTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $templateArn
 * @property string|null $templateName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property int|null $defaultVersionId
 * @property string|null $templateBody
 * @property bool|null $enabled
 * @property string|null $provisioningRoleArn
 * @property Shapes\ProvisioningHook|null $preProvisioningHook
 * @property 'FLEET_PROVISIONING'|'JITP'|null $type
 */
class DescribeProvisioningTemplateResponse extends Response
{
}
