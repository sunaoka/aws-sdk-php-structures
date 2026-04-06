<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkProfileName
 * @property string|null $Description
 * @property string $Ssid
 * @property 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE' $SecurityType
 * @property 'EAP_TLS'|null $EapMethod
 * @property string|null $CurrentPassword
 * @property string|null $NextPassword
 * @property string|null $CertificateAuthorityArn
 * @property list<string>|null $TrustAnchors
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateNetworkProfileRequest extends Request
{
    /**
     * @param array{
     *     NetworkProfileName: string,
     *     Description?: string|null,
     *     Ssid: string,
     *     SecurityType: 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE',
     *     EapMethod?: 'EAP_TLS'|null,
     *     CurrentPassword?: string|null,
     *     NextPassword?: string|null,
     *     CertificateAuthorityArn?: string|null,
     *     TrustAnchors?: list<string>|null,
     *     ClientRequestToken: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
