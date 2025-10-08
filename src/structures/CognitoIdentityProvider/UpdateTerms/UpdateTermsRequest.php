<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TermsId
 * @property string $UserPoolId
 * @property string|null $TermsName
 * @property 'LINK'|null $TermsSource
 * @property 'NONE'|null $Enforcement
 * @property array<string, string>|null $Links
 */
class UpdateTermsRequest extends Request
{
    /**
     * @param array{
     *     TermsId: string,
     *     UserPoolId: string,
     *     TermsName?: string|null,
     *     TermsSource?: 'LINK'|null,
     *     Enforcement?: 'NONE'|null,
     *     Links?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
