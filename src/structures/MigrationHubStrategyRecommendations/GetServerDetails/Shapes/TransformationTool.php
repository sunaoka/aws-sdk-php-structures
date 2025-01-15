<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property 'App2Container'|'Porting Assistant For .NET'|'End of Support Migration'|'Windows Web Application Migration Assistant'|'Application Migration Service'|'Strategy Recommendation Support'|'In Place Operating System Upgrade'|'Schema Conversion Tool'|'Database Migration Service'|'Native SQL Server Backup/Restore'|null $name
 * @property string|null $tranformationToolInstallationLink
 */
class TransformationTool extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     name?: 'App2Container'|'Porting Assistant For .NET'|'End of Support Migration'|'Windows Web Application Migration Assistant'|'Application Migration Service'|'Strategy Recommendation Support'|'In Place Operating System Upgrade'|'Schema Conversion Tool'|'Database Migration Service'|'Native SQL Server Backup/Restore'|null,
     *     tranformationToolInstallationLink?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
