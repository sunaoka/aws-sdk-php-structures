<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $waitingResponse
 * @property ResponseSpecification $continueResponse
 * @property StillWaitingResponseSpecification $stillWaitingResponse
 * @property bool $active
 */
class WaitAndContinueSpecification extends Shape
{
    /**
     * @param array{
     *     waitingResponse: ResponseSpecification,
     *     continueResponse: ResponseSpecification,
     *     stillWaitingResponse?: StillWaitingResponseSpecification,
     *     active?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
