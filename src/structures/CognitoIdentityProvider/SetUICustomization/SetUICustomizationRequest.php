<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUICustomization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $CSS
 * @property string|resource|\Psr\Http\Message\StreamInterface $ImageFile
 */
class SetUICustomizationRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId?: string,
     *     CSS?: string,
     *     ImageFile?: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
