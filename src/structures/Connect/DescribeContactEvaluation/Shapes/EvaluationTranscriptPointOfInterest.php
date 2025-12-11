<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationSuggestedAnswerTranscriptMillisecondOffsets|null $MillisecondOffsets
 * @property string|null $TranscriptSegment
 */
class EvaluationTranscriptPointOfInterest extends Shape
{
    /**
     * @param array{
     *     MillisecondOffsets?: EvaluationSuggestedAnswerTranscriptMillisecondOffsets|null,
     *     TranscriptSegment?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
