<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'saml'|'iamidentitycenter'|'iamfederation' $type
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSecurityConfigsRequest extends Request
{
    /**
     * @param array{
     *     type: 'saml'|'iamidentitycenter'|'iamfederation',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
