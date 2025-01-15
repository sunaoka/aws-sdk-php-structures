<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityRecognizerFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListEntityRecognizersRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\EntityRecognizerFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
