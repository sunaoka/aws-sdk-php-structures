<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property S3Location|null $s3Location
 */
class RecordingConfig extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     s3Location?: S3Location|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
