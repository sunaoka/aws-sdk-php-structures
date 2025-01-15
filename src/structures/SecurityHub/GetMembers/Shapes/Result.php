<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $ProcessingResult
 */
class Result extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     ProcessingResult?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
