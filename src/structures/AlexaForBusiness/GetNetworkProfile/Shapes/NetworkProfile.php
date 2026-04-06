<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetNetworkProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkProfileArn
 * @property string|null $NetworkProfileName
 * @property string|null $Description
 * @property string|null $Ssid
 * @property 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE'|null $SecurityType
 * @property 'EAP_TLS'|null $EapMethod
 * @property string|null $CurrentPassword
 * @property string|null $NextPassword
 * @property string|null $CertificateAuthorityArn
 * @property list<string>|null $TrustAnchors
 */
class NetworkProfile extends Shape
{
    /**
     * @param array{
     *     NetworkProfileArn?: string|null,
     *     NetworkProfileName?: string|null,
     *     Description?: string|null,
     *     Ssid?: string|null,
     *     SecurityType?: 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE'|null,
     *     EapMethod?: 'EAP_TLS'|null,
     *     CurrentPassword?: string|null,
     *     NextPassword?: string|null,
     *     CertificateAuthorityArn?: string|null,
     *     TrustAnchors?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
