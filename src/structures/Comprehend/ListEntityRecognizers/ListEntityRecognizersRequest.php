<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityRecognizerFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEntityRecognizersRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EntityRecognizerFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
