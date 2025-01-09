<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateRegexMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexMatchSetId
 * @property list<Shapes\RegexMatchSetUpdate> $Updates
 * @property string $ChangeToken
 */
class UpdateRegexMatchSetRequest extends Request
{
    /**
     * @param array{
     *     RegexMatchSetId: string,
     *     Updates: list<Shapes\RegexMatchSetUpdate>,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
