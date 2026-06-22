<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListManagedMicrovmImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageArn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ManagedMicrovmImageSummary extends Shape
{
    /**
     * @param array{
     *     imageArn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
