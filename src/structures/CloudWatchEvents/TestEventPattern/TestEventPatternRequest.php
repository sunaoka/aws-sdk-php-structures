<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\TestEventPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventPattern
 * @property string $Event
 */
class TestEventPatternRequest extends Request
{
    /**
     * @param array{
     *     EventPattern: string,
     *     Event: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
