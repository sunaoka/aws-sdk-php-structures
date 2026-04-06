<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $ClientId
 * @property string $TermsName
 * @property 'LINK' $TermsSource
 * @property 'NONE' $Enforcement
 * @property array<string, string>|null $Links
 */
class CreateTermsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     ClientId: string,
     *     TermsName: string,
     *     TermsSource: 'LINK',
     *     Enforcement: 'NONE',
     *     Links?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
