<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmForgotPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string|null $SecretHash
 * @property string $Username
 * @property string $ConfirmationCode
 * @property string $Password
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property array<string, string>|null $ClientMetadata
 */
class ConfirmForgotPasswordRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string|null,
     *     Username: string,
     *     ConfirmationCode: string,
     *     Password: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     UserContextData?: Shapes\UserContextDataType|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
