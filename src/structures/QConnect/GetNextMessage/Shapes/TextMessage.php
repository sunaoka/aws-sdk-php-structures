<?php

namespace Sunaoka\Aws\Structures\QConnect\GetNextMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property list<Citation>|null $citations
 * @property AIGuardrailAssessment|null $aiGuardrailAssessment
 */
class TextMessage extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     citations?: list<Citation>|null,
     *     aiGuardrailAssessment?: AIGuardrailAssessment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
