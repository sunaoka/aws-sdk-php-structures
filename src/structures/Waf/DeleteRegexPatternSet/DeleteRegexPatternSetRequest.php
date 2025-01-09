<?php

namespace Sunaoka\Aws\Structures\Waf\DeleteRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexPatternSetId
 * @property string $ChangeToken
 */
class DeleteRegexPatternSetRequest extends Request
{
    /**
     * @param array{
     *     RegexPatternSetId: string,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
