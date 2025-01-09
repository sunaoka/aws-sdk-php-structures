<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListLanguageModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED' $StatusEquals
 * @property string $NameContains
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListLanguageModelsRequest extends Request
{
    /**
     * @param array{
     *     StatusEquals?: 'IN_PROGRESS'|'FAILED'|'COMPLETED',
     *     NameContains?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
