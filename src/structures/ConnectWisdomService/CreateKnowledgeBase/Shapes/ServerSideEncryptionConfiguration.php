<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{kmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
