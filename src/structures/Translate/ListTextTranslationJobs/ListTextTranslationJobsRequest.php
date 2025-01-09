<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TextTranslationJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListTextTranslationJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TextTranslationJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
