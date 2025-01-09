<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Id
 * @property string $Description
 * @property list<Shapes\Regex> $RegularExpressionList
 * @property string $LockToken
 */
class UpdateRegexPatternSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Id: string,
     *     Description?: string,
     *     RegularExpressionList: list<Shapes\Regex>,
     *     LockToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
