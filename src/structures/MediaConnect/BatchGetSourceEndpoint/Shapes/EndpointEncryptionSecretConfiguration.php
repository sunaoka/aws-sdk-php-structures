<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 */
class EndpointEncryptionSecretConfiguration extends Shape
{
    /**
     * @param array{SecretArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
