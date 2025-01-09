<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $closingResponse
 * @property bool $active
 * @property DialogState $nextStep
 * @property ConditionalSpecification $conditional
 */
class IntentClosingSetting extends Shape
{
    /**
     * @param array{
     *     closingResponse?: ResponseSpecification,
     *     active?: bool,
     *     nextStep?: DialogState,
     *     conditional?: ConditionalSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
