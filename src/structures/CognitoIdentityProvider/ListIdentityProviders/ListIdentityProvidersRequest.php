<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListIdentityProviders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<0, 60>|null $MaxResults
 * @property string|null $NextToken
 */
class ListIdentityProvidersRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int<0, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
