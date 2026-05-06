<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string $mountPath
 */
class S3FilesAccessPointConfiguration extends Shape
{
    /**
     * @param array{
     *     accessPointArn: string,
     *     mountPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
