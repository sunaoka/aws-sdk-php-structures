<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string|null $masterUserPassword
 * @property bool|null $rotateMasterUserPassword
 * @property string|null $preferredBackupWindow
 * @property string|null $preferredMaintenanceWindow
 * @property bool|null $enableBackupRetention
 * @property bool|null $disableBackupRetention
 * @property bool|null $publiclyAccessible
 * @property bool|null $applyImmediately
 * @property string|null $caCertificateIdentifier
 * @property string|null $relationalDatabaseBlueprintId
 */
class UpdateRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     masterUserPassword?: string|null,
     *     rotateMasterUserPassword?: bool|null,
     *     preferredBackupWindow?: string|null,
     *     preferredMaintenanceWindow?: string|null,
     *     enableBackupRetention?: bool|null,
     *     disableBackupRetention?: bool|null,
     *     publiclyAccessible?: bool|null,
     *     applyImmediately?: bool|null,
     *     caCertificateIdentifier?: string|null,
     *     relationalDatabaseBlueprintId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
