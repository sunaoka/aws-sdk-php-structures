<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUICustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string|null $ClientId
 * @property string|null $CSS
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ImageFile
 */
class SetUICustomizationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string|null,
     *     CSS?: string|null,
     *     ImageFile?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
