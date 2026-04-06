<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListTerms;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property int<1, 60>|null $MaxResults
 * @property string|null $NextToken
 */
class ListTermsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     MaxResults?: int<1, 60>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
