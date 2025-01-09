<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskProtection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskArn
 * @property bool $protectionEnabled
 * @property \Aws\Api\DateTimeResult $expirationDate
 */
class ProtectedTask extends Shape
{
    /**
     * @param array{
     *     taskArn?: string,
     *     protectionEnabled?: bool,
     *     expirationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
