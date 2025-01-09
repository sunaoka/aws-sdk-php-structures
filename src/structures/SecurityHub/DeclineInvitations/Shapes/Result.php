<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DeclineInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $ProcessingResult
 */
class Result extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     ProcessingResult?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
