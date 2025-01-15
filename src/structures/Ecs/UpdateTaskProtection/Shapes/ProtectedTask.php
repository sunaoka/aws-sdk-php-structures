<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskProtection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskArn
 * @property bool|null $protectionEnabled
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 */
class ProtectedTask extends Shape
{
    /**
     * @param array{
     *     taskArn?: string|null,
     *     protectionEnabled?: bool|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
