<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListQuestionSetVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListQuestionSetVersionsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
