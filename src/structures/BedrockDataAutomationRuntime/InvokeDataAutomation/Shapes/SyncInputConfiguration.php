<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomationRuntime\InvokeDataAutomation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $bytes
 * @property string|null $s3Uri
 */
class SyncInputConfiguration extends Shape
{
    /**
     * @param array{
     *     bytes?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     s3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
