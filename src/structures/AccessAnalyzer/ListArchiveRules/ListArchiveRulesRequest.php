<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListArchiveRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListArchiveRulesRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
