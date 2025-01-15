<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateApplicationComponentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null $appType
 * @property string $applicationComponentId
 * @property bool|null $configureOnly
 * @property 'excludeFromAssessment'|'includeInAssessment'|null $inclusionStatus
 * @property string|null $secretsManagerKey
 * @property list<Shapes\SourceCode>|null $sourceCodeList
 * @property Shapes\StrategyOption|null $strategyOption
 */
class UpdateApplicationComponentConfigRequest extends Request
{
    /**
     * @param array{
     *     appType?: 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null,
     *     applicationComponentId: string,
     *     configureOnly?: bool|null,
     *     inclusionStatus?: 'excludeFromAssessment'|'includeInAssessment'|null,
     *     secretsManagerKey?: string|null,
     *     sourceCodeList?: list<Shapes\SourceCode>|null,
     *     strategyOption?: Shapes\StrategyOption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
