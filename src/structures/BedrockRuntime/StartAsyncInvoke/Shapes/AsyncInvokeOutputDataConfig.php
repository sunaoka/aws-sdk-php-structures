<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\StartAsyncInvoke\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AsyncInvokeS3OutputDataConfig $s3OutputDataConfig
 */
class AsyncInvokeOutputDataConfig extends Shape
{
    /**
     * @param array{s3OutputDataConfig?: AsyncInvokeS3OutputDataConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
