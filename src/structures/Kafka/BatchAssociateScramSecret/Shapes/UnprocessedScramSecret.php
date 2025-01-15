<?php

namespace Sunaoka\Aws\Structures\Kafka\BatchAssociateScramSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 * @property string|null $SecretArn
 */
class UnprocessedScramSecret extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
