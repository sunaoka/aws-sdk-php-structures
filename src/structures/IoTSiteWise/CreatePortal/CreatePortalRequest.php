<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalName
 * @property string|null $portalDescription
 * @property string $portalContactEmail
 * @property string|null $clientToken
 * @property Shapes\ImageFile|null $portalLogoImageFile
 * @property string $roleArn
 * @property array<string, string>|null $tags
 * @property 'IAM'|'SSO'|null $portalAuthMode
 * @property string|null $notificationSenderEmail
 * @property Shapes\Alarms|null $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2'|null $portalType
 * @property array<string, Shapes\PortalTypeEntry>|null $portalTypeConfiguration
 */
class CreatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalName: string,
     *     portalDescription?: string|null,
     *     portalContactEmail: string,
     *     clientToken?: string|null,
     *     portalLogoImageFile?: Shapes\ImageFile|null,
     *     roleArn: string,
     *     tags?: array<string, string>|null,
     *     portalAuthMode?: 'IAM'|'SSO'|null,
     *     notificationSenderEmail?: string|null,
     *     alarms?: Shapes\Alarms|null,
     *     portalType?: 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2'|null,
     *     portalTypeConfiguration?: array<string, Shapes\PortalTypeEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
