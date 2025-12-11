<?php

namespace Sunaoka\Aws\Structures\QConnect\ListSpans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property list<SpanCitation>|null $citations
 * @property AIGuardrailAssessment|null $aiGuardrailAssessment
 */
class SpanTextValue extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     citations?: list<SpanCitation>|null,
     *     aiGuardrailAssessment?: AIGuardrailAssessment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
