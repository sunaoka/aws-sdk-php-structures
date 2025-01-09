<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListVocabularies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'PENDING'|'READY'|'FAILED' $StateEquals
 * @property string $NameContains
 */
class ListVocabulariesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     StateEquals?: 'PENDING'|'READY'|'FAILED',
     *     NameContains?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
