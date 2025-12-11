<?php

namespace Sunaoka\Aws\Structures\IoTDeviceAdvisor\GetDeviceAdvisorEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $thingArn
 * @property string|null $certificateArn
 * @property string|null $deviceRoleArn
 * @property 'X509ClientCertificate'|'SignatureVersion4'|null $authenticationMethod
 */
class GetDeviceAdvisorEndpointRequest extends Request
{
    /**
     * @param array{
     *     thingArn?: string|null,
     *     certificateArn?: string|null,
     *     deviceRoleArn?: string|null,
     *     authenticationMethod?: 'X509ClientCertificate'|'SignatureVersion4'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
