<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SessionStorageConfiguration|null $sessionStorage
 */
class FilesystemConfiguration extends Shape
{
    /**
     * @param array{sessionStorage?: SessionStorageConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
