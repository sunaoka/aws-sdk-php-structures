<?php

namespace Sunaoka\Aws\Structures\Translate\ListTextTranslationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TextTranslationJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListTextTranslationJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\TextTranslationJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
