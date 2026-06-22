<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\ListManagedMicrovmImageVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageArn
 * @property string $imageVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ManagedMicrovmImageVersion extends Shape
{
    /**
     * @param array{
     *     imageArn: string,
     *     imageVersion: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
