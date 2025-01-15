<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListArchiveRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListArchiveRulesRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
