<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUICustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $ClientId
 * @property string|null $ImageUrl
 * @property string|null $CSS
 * @property string|null $CSSVersion
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 */
class UICustomizationType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     ClientId?: string|null,
     *     ImageUrl?: string|null,
     *     CSS?: string|null,
     *     CSSVersion?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
