<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contactArn
 * @property string $channel
 * @property \Aws\Api\DateTimeResult $connectedToSystemTime
 */
class ContactContent extends Shape
{
    /**
     * @param array{
     *     contactArn: string,
     *     channel: string,
     *     connectedToSystemTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
