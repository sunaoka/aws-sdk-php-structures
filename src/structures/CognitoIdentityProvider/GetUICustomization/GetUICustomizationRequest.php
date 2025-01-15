<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUICustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string|null $ClientId
 */
class GetUICustomizationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
