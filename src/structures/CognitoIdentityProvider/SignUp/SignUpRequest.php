<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SignUp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string $SecretHash
 * @property string $Username
 * @property string $Password
 * @property list<Shapes\AttributeType> $UserAttributes
 * @property list<Shapes\AttributeType> $ValidationData
 * @property Shapes\AnalyticsMetadataType $AnalyticsMetadata
 * @property Shapes\UserContextDataType $UserContextData
 * @property array<string, string> $ClientMetadata
 */
class SignUpRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string,
     *     Username: string,
     *     Password?: string,
     *     UserAttributes?: list<Shapes\AttributeType>,
     *     ValidationData?: list<Shapes\AttributeType>,
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
