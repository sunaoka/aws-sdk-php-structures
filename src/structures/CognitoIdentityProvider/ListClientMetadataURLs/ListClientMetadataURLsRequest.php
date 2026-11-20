<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListClientMetadataURLs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $CIMDPolicyId
 * @property string|null $NextToken
 * @property int<1, 60>|null $MaxResults
 */
class ListClientMetadataURLsRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     CIMDPolicyId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
