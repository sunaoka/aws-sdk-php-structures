<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateRegexPatternSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RegexPatternSetId
 * @property list<Shapes\RegexPatternSetUpdate> $Updates
 * @property string $ChangeToken
 */
class UpdateRegexPatternSetRequest extends Request
{
    /**
     * @param array{
     *     RegexPatternSetId: string,
     *     Updates: list<Shapes\RegexPatternSetUpdate>,
     *     ChangeToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
