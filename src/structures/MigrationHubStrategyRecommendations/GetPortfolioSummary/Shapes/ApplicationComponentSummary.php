<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null $appType
 * @property int|null $count
 */
class ApplicationComponentSummary extends Shape
{
    /**
     * @param array{
     *     appType?: 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null,
     *     count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
