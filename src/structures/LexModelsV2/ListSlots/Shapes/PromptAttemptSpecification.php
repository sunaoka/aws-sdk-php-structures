<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowInterrupt
 * @property AllowedInputTypes $allowedInputTypes
 * @property AudioAndDTMFInputSpecification $audioAndDTMFInputSpecification
 * @property TextInputSpecification $textInputSpecification
 */
class PromptAttemptSpecification extends Shape
{
    /**
     * @param array{
     *     allowInterrupt?: bool,
     *     allowedInputTypes: AllowedInputTypes,
     *     audioAndDTMFInputSpecification?: AudioAndDTMFInputSpecification,
     *     textInputSpecification?: TextInputSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
