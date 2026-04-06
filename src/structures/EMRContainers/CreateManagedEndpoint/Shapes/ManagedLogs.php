<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $allowAWSToRetainLogs
 * @property string|null $encryptionKeyArn
 */
class ManagedLogs extends Shape
{
    /**
     * @param array{
     *     allowAWSToRetainLogs?: 'ENABLED'|'DISABLED'|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
