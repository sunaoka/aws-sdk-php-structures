<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionStorageConfiguration|null $sessionStorage
 * @property S3FilesAccessPointConfiguration|null $s3FilesAccessPoint
 * @property EfsAccessPointConfiguration|null $efsAccessPoint
 */
class FilesystemConfiguration extends Shape
{
    /**
     * @param array{
     *     sessionStorage?: SessionStorageConfiguration|null,
     *     s3FilesAccessPoint?: S3FilesAccessPointConfiguration|null,
     *     efsAccessPoint?: EfsAccessPointConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
