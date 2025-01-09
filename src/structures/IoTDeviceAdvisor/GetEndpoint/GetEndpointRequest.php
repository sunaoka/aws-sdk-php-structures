<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingArn
 * @property string $certificateArn
 * @property string $deviceRoleArn
 * @property 'X509ClientCertificate'|'SignatureVersion4' $authenticationMethod
 */
class GetEndpointRequest extends Request
{
    /**
     * @param array{
     *     thingArn?: string,
     *     certificateArn?: string,
     *     deviceRoleArn?: string,
     *     authenticationMethod?: 'X509ClientCertificate'|'SignatureVersion4'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
