<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexPatternSetId
 */
class GetRegexPatternSetRequest extends Request
{
    /**
     * @param array{RegexPatternSetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
