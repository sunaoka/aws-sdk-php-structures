<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $masterUserPassword
 * @property string|null $engineVersion
 * @property bool|null $backupRetentionEnabled
 */
class PendingModifiedRelationalDatabaseValues extends Shape
{
    /**
     * @param array{
     *     masterUserPassword?: string|null,
     *     engineVersion?: string|null,
     *     backupRetentionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
