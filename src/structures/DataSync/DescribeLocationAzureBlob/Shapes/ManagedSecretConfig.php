<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationAzureBlob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 */
class ManagedSecretConfig extends Shape
{
    /**
     * @param array{SecretArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
