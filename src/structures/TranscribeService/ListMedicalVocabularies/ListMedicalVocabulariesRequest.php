<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListMedicalVocabularies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'PENDING'|'READY'|'FAILED' $StateEquals
 * @property string $NameContains
 */
class ListMedicalVocabulariesRequest extends Request
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
