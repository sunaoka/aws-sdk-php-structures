<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $masterUserPassword
 * @property string $engineVersion
 * @property bool $backupRetentionEnabled
 */
class PendingModifiedRelationalDatabaseValues extends Shape
{
    /**
     * @param array{
     *     masterUserPassword?: string,
     *     engineVersion?: string,
     *     backupRetentionEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
