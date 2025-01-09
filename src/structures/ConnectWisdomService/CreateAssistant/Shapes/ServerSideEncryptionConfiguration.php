<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
