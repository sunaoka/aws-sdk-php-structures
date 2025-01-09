<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudienceSize $audienceSize
 * @property double $score
 */
class RelevanceMetric extends Shape
{
    /**
     * @param array{
     *     audienceSize: AudienceSize,
     *     score?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
