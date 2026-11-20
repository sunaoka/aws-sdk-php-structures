<?php

namespace Sunaoka\Aws\Structures\Polly\CreateVoice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Url
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $Bytes
 */
class RecordingData extends Shape
{
    /**
     * @param array{
     *     S3Url?: string|null,
     *     Bytes?: string|resource|\Psr\Http\Message\StreamInterface|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
