<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessPointArn
 * @property string $mountPath
 * @property string $fileSystemArn
 */
class S3FilesConfiguration extends Shape
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
