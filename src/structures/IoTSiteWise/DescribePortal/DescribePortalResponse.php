<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $portalId
 * @property string $portalArn
 * @property string $portalName
 * @property string|null $portalDescription
 * @property string $portalClientId
 * @property string $portalStartUrl
 * @property string $portalContactEmail
 * @property Shapes\PortalStatus $portalStatus
 * @property \Aws\Api\DateTimeResult $portalCreationDate
 * @property \Aws\Api\DateTimeResult $portalLastUpdateDate
 * @property Shapes\ImageLocation|null $portalLogoImageLocation
 * @property string|null $roleArn
 * @property 'IAM'|'SSO'|null $portalAuthMode
 * @property string|null $notificationSenderEmail
 * @property Shapes\Alarms|null $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2'|null $portalType
 * @property array<string, Shapes\PortalTypeEntry>|null $portalTypeConfiguration
 */
class DescribePortalResponse extends Response
{
}
