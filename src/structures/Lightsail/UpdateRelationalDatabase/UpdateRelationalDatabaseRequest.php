<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $masterUserPassword
 * @property bool $rotateMasterUserPassword
 * @property string $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property bool $enableBackupRetention
 * @property bool $disableBackupRetention
 * @property bool $publiclyAccessible
 * @property bool $applyImmediately
 * @property string $caCertificateIdentifier
 * @property string $relationalDatabaseBlueprintId
 */
class UpdateRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     masterUserPassword?: string,
     *     rotateMasterUserPassword?: bool,
     *     preferredBackupWindow?: string,
     *     preferredMaintenanceWindow?: string,
     *     enableBackupRetention?: bool,
     *     disableBackupRetention?: bool,
     *     publiclyAccessible?: bool,
     *     applyImmediately?: bool,
     *     caCertificateIdentifier?: string,
     *     relationalDatabaseBlueprintId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
