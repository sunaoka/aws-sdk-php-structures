<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ConfirmSignUp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $SecretHash
 * @property string $Username
 * @property string $ConfirmationCode
 * @property bool $ForceAliasCreation
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\UserContextDataType $UserContextData
 * @property array<string, string> $ClientMetadata
 * @property string $Session
 */
class ConfirmSignUpRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string,
     *     Username: string,
     *     ConfirmationCode: string,
     *     ForceAliasCreation?: bool,
     *     AnalyticsMetadata?: Shapes\AnalyticsMetadataType,
     *     UserContextData?: Shapes\UserContextDataType,
     *     ClientMetadata?: array<string, string>,
     *     Session?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
