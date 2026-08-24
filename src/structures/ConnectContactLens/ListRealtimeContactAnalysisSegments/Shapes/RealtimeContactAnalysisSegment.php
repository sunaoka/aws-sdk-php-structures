<?php

namespace Sunaoka\Aws\Structures\ConnectContactLens\ListRealtimeContactAnalysisSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Transcript|null $Transcript
 * @property Categories|null $Categories
 * @property PostContactSummary|null $PostContactSummary
 * @property ExtractedInformation|null $ExtractedInformation
 */
class RealtimeContactAnalysisSegment extends Shape
{
    /**
     * @param array{
     *     Transcript?: Transcript|null,
     *     Categories?: Categories|null,
     *     PostContactSummary?: PostContactSummary|null,
     *     ExtractedInformation?: ExtractedInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
