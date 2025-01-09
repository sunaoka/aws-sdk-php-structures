<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeManagedLoginBrandingByClient\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ManagedLoginBrandingId
 * @property string $UserPoolId
 * @property bool $UseCognitoProvidedValues
 * @property Document $Settings
 * @property list<AssetType> $Assets
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class ManagedLoginBrandingType extends Shape
{
    /**
     * @param array{
     *     ManagedLoginBrandingId?: string,
     *     UserPoolId?: string,
     *     UseCognitoProvidedValues?: bool,
     *     Settings?: Document,
     *     Assets?: list<AssetType>,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
