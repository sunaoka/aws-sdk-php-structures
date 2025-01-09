<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $portalId
 * @property string $portalArn
 * @property string $portalName
 * @property string $portalDescription
 * @property string $portalClientId
 * @property string $portalStartUrl
 * @property string $portalContactEmail
 * @property Shapes\PortalStatus $portalStatus
 * @property \Aws\Api\DateTimeResult $portalCreationDate
 * @property \Aws\Api\DateTimeResult $portalLastUpdateDate
 * @property Shapes\ImageLocation $portalLogoImageLocation
 * @property string $roleArn
 * @property 'IAM'|'SSO' $portalAuthMode
 * @property string $notificationSenderEmail
 * @property Shapes\Alarms $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2' $portalType
 * @property array<string, Shapes\PortalTypeEntry> $portalTypeConfiguration
 */
class DescribePortalResponse extends Response
{
}
