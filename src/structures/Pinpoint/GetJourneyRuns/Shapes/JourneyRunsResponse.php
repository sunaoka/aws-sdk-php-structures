<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JourneyRunResponse> $Item
 * @property string $NextToken
 */
class JourneyRunsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<JourneyRunResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
