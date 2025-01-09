<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdatePortal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $portalName
 * @property string $portalDescription
 * @property string $portalContactEmail
 * @property Shapes\Image $portalLogoImage
 * @property string $roleArn
 * @property string $clientToken
 * @property string $notificationSenderEmail
 * @property Shapes\Alarms $alarms
 * @property 'SITEWISE_PORTAL_V1'|'SITEWISE_PORTAL_V2' $portalType
 * @property array<string, Shapes\PortalTypeEntry> $portalTypeConfiguration
 */
class UpdatePortalRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     portalName: string,
     *     portalDescription?: string,
     *     portalContactEmail: string,
     *     portalLogoImage?: Shapes\Image,
     *     roleArn: string,
     *     clientToken?: string,
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
