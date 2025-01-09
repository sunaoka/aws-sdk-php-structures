<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property string $Description
 * @property list<Shapes\Regex> $RegularExpressionList
 * @property list<Shapes\Tag> $Tags
 */
class CreateRegexPatternSetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Description?: string,
     *     RegularExpressionList: list<Shapes\Regex>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
