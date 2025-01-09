<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUICustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $CSS
 * @property string $ImageFile
 */
class SetUICustomizationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string,
     *     CSS?: string,
     *     ImageFile?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
