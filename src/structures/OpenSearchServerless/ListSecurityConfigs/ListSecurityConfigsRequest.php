<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property 'saml'|'iamidentitycenter' $type
 */
class ListSecurityConfigsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     type: 'saml'|'iamidentitycenter'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
