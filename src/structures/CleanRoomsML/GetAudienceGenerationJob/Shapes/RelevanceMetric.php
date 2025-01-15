<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudienceSize $audienceSize
 * @property double|null $score
 */
class RelevanceMetric extends Shape
{
    /**
     * @param array{
     *     audienceSize: AudienceSize,
     *     score?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
