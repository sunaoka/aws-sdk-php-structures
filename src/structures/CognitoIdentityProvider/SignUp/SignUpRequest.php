<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SignUp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientId
 * @property string|null $SecretHash
 * @property string $Username
 * @property string|null $Password
 * @property list<Shapes\AttributeType>|null $UserAttributes
 * @property list<Shapes\AttributeType>|null $ValidationData
 * @property Shapes\AnalyticsMetadataType|null $AnalyticsMetadata
 * @property Shapes\UserContextDataType|null $UserContextData
 * @property array<string, string>|null $ClientMetadata
 */
class SignUpRequest extends Request
{
    /**
     * @param array{
     *     ClientId: string,
     *     SecretHash?: string|null,
     *     Username: string,
     *     Password?: string|null,
     *     UserAttributes?: list<Shapes\AttributeType>|null,
     *     ValidationData?: list<Shapes\AttributeType>|null,
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
