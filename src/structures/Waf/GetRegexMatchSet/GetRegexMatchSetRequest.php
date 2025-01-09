<?php

namespace Sunaoka\Aws\Structures\Waf\GetRegexMatchSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexMatchSetId
 */
class GetRegexMatchSetRequest extends Request
{
    /**
     * @param array{RegexMatchSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
