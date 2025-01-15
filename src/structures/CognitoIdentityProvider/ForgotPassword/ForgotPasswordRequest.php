<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ForgotPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string|null $SecretHash
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property string $Username
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property array<string, string>|null $ClientMetadata
 */
class ForgotPasswordRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string|null,
     *     UserContextData?: Shapes\UserContextDataType|null,
     *     Username: string,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     ClientMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
