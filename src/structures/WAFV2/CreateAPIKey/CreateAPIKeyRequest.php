<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateAPIKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property list<string> $TokenDomains
 */
class CreateAPIKeyRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     TokenDomains: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
