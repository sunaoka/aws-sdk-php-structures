<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JourneyRunResponse> $Item
 * @property string|null $NextToken
 */
class JourneyRunsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<JourneyRunResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
