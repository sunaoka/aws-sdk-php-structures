<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'saml'|'iamidentitycenter' $type
 */
class ListSecurityConfigsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     type: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
