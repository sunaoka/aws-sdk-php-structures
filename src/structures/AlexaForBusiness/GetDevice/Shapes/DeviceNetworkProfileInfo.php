<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkProfileArn
 * @property string|null $CertificateArn
 * @property \Aws\Api\DateTimeResult|null $CertificateExpirationTime
 */
class DeviceNetworkProfileInfo extends Shape
{
    /**
     * @param array{
     *     NetworkProfileArn?: string|null,
     *     CertificateArn?: string|null,
     *     CertificateExpirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
