<?php

namespace Sunaoka\Aws\Structures\TranscribeService\StartCallAnalyticsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $GenerateAbstractiveSummary
 */
class Summarization extends Shape
{
    /**
     * @param array{GenerateAbstractiveSummary: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
