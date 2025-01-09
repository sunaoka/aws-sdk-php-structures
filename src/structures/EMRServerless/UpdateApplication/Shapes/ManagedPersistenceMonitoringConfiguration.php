<?php

namespace Sunaoka\Aws\Structures\EMRServerless\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $encryptionKeyArn
 */
class ManagedPersistenceMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     encryptionKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
