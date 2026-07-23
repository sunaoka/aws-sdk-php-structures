<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string $mountPath
 * @property string $fileSystemArn
 */
class EfsConfiguration extends Shape
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     mountPath: string,
     *     fileSystemArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
