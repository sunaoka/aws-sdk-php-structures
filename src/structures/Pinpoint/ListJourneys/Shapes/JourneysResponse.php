<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<JourneyResponse> $Item
 * @property string|null $NextToken
 */
class JourneysResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<JourneyResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
