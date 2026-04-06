<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SearchNetworkProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkProfileArn
 * @property string|null $NetworkProfileName
 * @property string|null $Description
 * @property string|null $Ssid
 * @property 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE'|null $SecurityType
 * @property 'EAP_TLS'|null $EapMethod
 * @property string|null $CertificateAuthorityArn
 */
class NetworkProfileData extends Shape
{
    /**
     * @param array{
     *     NetworkProfileArn?: string|null,
     *     NetworkProfileName?: string|null,
     *     Description?: string|null,
     *     Ssid?: string|null,
     *     SecurityType?: 'OPEN'|'WEP'|'WPA_PSK'|'WPA2_PSK'|'WPA2_ENTERPRISE'|null,
     *     EapMethod?: 'EAP_TLS'|null,
     *     CertificateAuthorityArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
