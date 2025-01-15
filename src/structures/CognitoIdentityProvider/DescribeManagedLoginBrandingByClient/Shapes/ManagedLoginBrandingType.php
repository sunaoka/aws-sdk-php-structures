<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBrandingByClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ManagedLoginBrandingId
 * @property string|null $UserPoolId
 * @property bool|null $UseCognitoProvidedValues
 * @property Document|null $Settings
 * @property list<AssetType>|null $Assets
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 */
class ManagedLoginBrandingType extends Shape
{
    /**
     * @param array{
     *     ManagedLoginBrandingId?: string|null,
     *     UserPoolId?: string|null,
     *     UseCognitoProvidedValues?: bool|null,
     *     Settings?: Document|null,
     *     Assets?: list<AssetType>|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
