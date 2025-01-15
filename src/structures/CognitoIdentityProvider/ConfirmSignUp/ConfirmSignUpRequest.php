<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmSignUp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string|null $SecretHash
 * @property string $Username
 * @property string $ConfirmationCode
 * @property bool|null $ForceAliasCreation
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property array<string, string>|null $ClientMetadata
 * @property string|null $Session
 */
class ConfirmSignUpRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string|null,
     *     Username: string,
     *     ConfirmationCode: string,
     *     ForceAliasCreation?: bool|null,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType|null,
     *     UserContextData?: Shapes\UserContextDataType|null,
     *     ClientMetadata?: array<string, string>|null,
     *     Session?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
