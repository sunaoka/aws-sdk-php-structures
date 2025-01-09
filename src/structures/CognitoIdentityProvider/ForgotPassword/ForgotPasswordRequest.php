<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgotPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $SecretHash
 * @property Shapes\UserContextDataType $UserContextData
 * @property string $Username
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property array<string, string> $ClientMetadata
 */
class ForgotPasswordRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string,
     *     UserContextData?: Shapes\UserContextDataType,
     *     Username: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     ClientMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
