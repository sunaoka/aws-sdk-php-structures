<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchPutProfileObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int<200, 599> $Code
 * @property string|null $Message
 */
class BatchPutProfileObjectErrorItem extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Code: int<200, 599>,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
