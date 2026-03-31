<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SendMessageTextDelta|null $textDelta
 * @property SendMessageJsonDelta|null $jsonDelta
 */
class SendMessageContentBlockDelta extends Shape
{
    /**
     * @param array{
     *     textDelta?: SendMessageTextDelta|null,
     *     jsonDelta?: SendMessageJsonDelta|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
