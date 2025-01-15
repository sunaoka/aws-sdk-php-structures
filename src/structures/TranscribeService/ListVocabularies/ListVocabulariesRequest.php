<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListVocabularies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'PENDING'|'READY'|'FAILED'|null $StateEquals
 * @property string|null $NameContains
 */
class ListVocabulariesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     StateEquals?: 'PENDING'|'READY'|'FAILED'|null,
     *     NameContains?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
