<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowInterrupt
 * @property AllowedInputTypes $allowedInputTypes
 * @property AudioAndDTMFInputSpecification|null $audioAndDTMFInputSpecification
 * @property TextInputSpecification|null $textInputSpecification
 */
class PromptAttemptSpecification extends Shape
{
    /**
     * @param array{
     *     allowInterrupt?: bool|null,
     *     allowedInputTypes: AllowedInputTypes,
     *     audioAndDTMFInputSpecification?: AudioAndDTMFInputSpecification|null,
     *     textInputSpecification?: TextInputSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
