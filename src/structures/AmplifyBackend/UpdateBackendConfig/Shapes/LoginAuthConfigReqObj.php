<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsCognitoIdentityPoolId
 * @property string|null $AwsCognitoRegion
 * @property string|null $AwsUserPoolsId
 * @property string|null $AwsUserPoolsWebClientId
 */
class LoginAuthConfigReqObj extends Shape
{
    /**
     * @param array{
     *     AwsCognitoIdentityPoolId?: string|null,
     *     AwsCognitoRegion?: string|null,
     *     AwsUserPoolsId?: string|null,
     *     AwsUserPoolsWebClientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
