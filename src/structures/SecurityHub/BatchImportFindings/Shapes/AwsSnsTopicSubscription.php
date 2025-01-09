<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 * @property string $Protocol
 */
class AwsSnsTopicSubscription extends Shape
{
    /**
     * @param array{
     *     Endpoint?: string,
     *     Protocol?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
