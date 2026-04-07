<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'FAILED' $status
 * @property string|null $error
 * @property \Psr\Http\Message\StreamInterface|null $data
 */
class ScreenshotResult extends Shape
{
    /**
     * @param array{
     *     status: 'SUCCESS'|'FAILED',
     *     error?: string|null,
     *     data?: \Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
