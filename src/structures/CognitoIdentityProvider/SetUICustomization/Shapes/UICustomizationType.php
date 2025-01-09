<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUICustomization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $ImageUrl
 * @property string $CSS
 * @property string $CSSVersion
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property \Aws\Api\DateTimeResult $CreationDate
 */
class UICustomizationType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     ClientId?: string,
     *     ImageUrl?: string,
     *     CSS?: string,
     *     CSSVersion?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     CreationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
