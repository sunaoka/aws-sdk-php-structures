<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListLanguageModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null $StatusEquals
 * @property string|null $NameContains
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListLanguageModelsRequest extends Request
{
    /**
     * @param array{
     *     StatusEquals?: 'IN_PROGRESS'|'FAILED'|'COMPLETED'|null,
     *     NameContains?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
