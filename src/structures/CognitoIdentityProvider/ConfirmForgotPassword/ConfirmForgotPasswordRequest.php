<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmForgotPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $SecretHash
 * @property string $Username
 * @property string $ConfirmationCode
 * @property string $Password
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\UserContextDataType $UserContextData
 * @property array<string, string> $ClientMetadata
 */
class ConfirmForgotPasswordRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string,
     *     Username: string,
     *     ConfirmationCode: string,
     *     Password: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     UserContextData?: Shapes\UserContextDataType,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
