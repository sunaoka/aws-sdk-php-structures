<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 */
class RetrieveAndGenerateSessionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
