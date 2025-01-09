<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteRegexMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexMatchSetId
 * @property string $ChangeToken
 */
class DeleteRegexMatchSetRequest extends Request
{
    /**
     * @param array{
     *     RegexMatchSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
