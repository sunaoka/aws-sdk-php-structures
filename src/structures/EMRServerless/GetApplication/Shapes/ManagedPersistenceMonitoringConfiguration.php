<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property string|null $encryptionKeyArn
 */
class ManagedPersistenceMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
