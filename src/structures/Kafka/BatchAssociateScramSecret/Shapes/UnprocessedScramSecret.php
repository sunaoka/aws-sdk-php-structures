<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchAssociateScramSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 * @property string $SecretArn
 */
class UnprocessedScramSecret extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorMessage?: string,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
