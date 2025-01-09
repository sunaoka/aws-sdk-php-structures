<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsCognitoIdentityPoolId
 * @property string $AwsCognitoRegion
 * @property string $AwsUserPoolsId
 * @property string $AwsUserPoolsWebClientId
 */
class LoginAuthConfigReqObj extends Shape
{
    /**
     * @param array{
     *     AwsCognitoIdentityPoolId?: string,
     *     AwsCognitoRegion?: string,
     *     AwsUserPoolsId?: string,
     *     AwsUserPoolsWebClientId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
