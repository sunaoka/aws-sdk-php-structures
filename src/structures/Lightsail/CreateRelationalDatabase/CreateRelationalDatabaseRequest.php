<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateRelationalDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property string $availabilityZone
 * @property string $relationalDatabaseBlueprintId
 * @property string $relationalDatabaseBundleId
 * @property string $masterDatabaseName
 * @property string $masterUsername
 * @property string $masterUserPassword
 * @property string $preferredBackupWindow
 * @property string $preferredMaintenanceWindow
 * @property bool $publiclyAccessible
 * @property list<Shapes\Tag> $tags
 */
class CreateRelationalDatabaseRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     availabilityZone?: string,
     *     relationalDatabaseBlueprintId: string,
     *     relationalDatabaseBundleId: string,
     *     masterDatabaseName: string,
     *     masterUsername: string,
     *     masterUserPassword?: string,
     *     preferredBackupWindow?: string,
     *     preferredMaintenanceWindow?: string,
     *     publiclyAccessible?: bool,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
