<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartCodeInterpreterSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3FilesConfiguration|null $s3FilesConfiguration
 * @property EfsConfiguration|null $efsConfiguration
 */
class ToolsFileSystemConfiguration extends Shape
{
    /**
     * @param array{
     *     s3FilesConfiguration?: S3FilesConfiguration|null,
     *     efsConfiguration?: EfsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
