<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityRecognizerFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListEntityRecognizersRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EntityRecognizerFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
