<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $mountPath
 */
class SessionStorageConfiguration extends Shape
{
    /**
     * @param array{mountPath: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
