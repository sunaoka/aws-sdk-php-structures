<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $portalName
 * @property string|null $portalDescription
 * @property string $portalContactEmail
 * @property Shapes\Image|null $portalLogoImage
 * @property string $roleArn
 * @property string|null $clientToken
 * @property string|null $notificationSenderEmail
 * @property Shapes\Alarms|null $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2'|null $portalType
 * @property array<string, Shapes\PortalTypeEntry>|null $portalTypeConfiguration
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     portalName: string,
     *     portalDescription?: string|null,
     *     portalContactEmail: string,
     *     portalLogoImage?: Shapes\Image|null,
     *     roleArn: string,
     *     clientToken?: string|null,
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
