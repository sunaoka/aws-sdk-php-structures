<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channel
 * @property \Aws\Api\DateTimeResult $connectedToSystemTime
 * @property string $contactArn
 */
class ContactContent extends Shape
{
    /**
     * @param array{
     *     channel: string,
     *     connectedToSystemTime: \Aws\Api\DateTimeResult,
     *     contactArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
