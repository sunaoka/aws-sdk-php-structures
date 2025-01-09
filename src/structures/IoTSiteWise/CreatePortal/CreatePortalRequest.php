<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalName
 * @property string $portalDescription
 * @property string $portalContactEmail
 * @property string $clientToken
 * @property Shapes\ImageFile $portalLogoImageFile
 * @property string $roleArn
 * @property array<string, string> $tags
 * @property 'IAM'|'SSO' $portalAuthMode
 * @property string $notificationSenderEmail
 * @property Shapes\Alarms $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2' $portalType
 * @property array<string, Shapes\PortalTypeEntry> $portalTypeConfiguration
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalName: string,
     *     portalDescription?: string,
     *     portalContactEmail: string,
     *     clientToken?: string,
     *     portalLogoImageFile?: Shapes\ImageFile,
     *     roleArn: string,
     *     tags?: array<string, string>,
     *     portalAuthMode?: 'IAM'|'SSO',
     *     notificationSenderEmail?: string,
     *     alarms?: Shapes\Alarms,
     *     portalType?: 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2',
     *     portalTypeConfiguration?: array<string, Shapes\PortalTypeEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
