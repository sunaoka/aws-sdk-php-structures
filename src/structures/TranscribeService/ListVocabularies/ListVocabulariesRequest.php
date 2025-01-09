<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListVocabularies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'PENDING'|'READY'|'FAILED' $StateEquals
 * @property string $NameContains
 */
class ListVocabulariesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     StateEquals?: 'PENDING'|'READY'|'FAILED',
     *     NameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
