<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeleteRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $LockToken
 */
class DeleteRegexPatternSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     LockToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
