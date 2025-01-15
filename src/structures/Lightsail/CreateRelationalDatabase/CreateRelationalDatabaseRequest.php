<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string|null $availabilityZone
 * @property string $relationalDatabaseBlueprintId
 * @property string $relationalDatabaseBundleId
 * @property string $masterDatabaseName
 * @property string $masterUsername
 * @property string|null $masterUserPassword
 * @property string|null $preferredBackupWindow
 * @property string|null $preferredMaintenanceWindow
 * @property bool|null $publiclyAccessible
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     availabilityZone?: string|null,
     *     relationalDatabaseBlueprintId: string,
     *     relationalDatabaseBundleId: string,
     *     masterDatabaseName: string,
     *     masterUsername: string,
     *     masterUserPassword?: string|null,
     *     preferredBackupWindow?: string|null,
     *     preferredMaintenanceWindow?: string|null,
     *     publiclyAccessible?: bool|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
