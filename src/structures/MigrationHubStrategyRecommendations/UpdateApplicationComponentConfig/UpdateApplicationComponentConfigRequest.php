<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateApplicationComponentConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet' $appType
 * @property string $applicationComponentId
 * @property bool $configureOnly
 * @property 'excludeFromAssessment'|'includeInAssessment' $inclusionStatus
 * @property string $secretsManagerKey
 * @property list<Shapes\SourceCode> $sourceCodeList
 * @property Shapes\StrategyOption $strategyOption
 */
class UpdateApplicationComponentConfigRequest extends Request
{
    /**
     * @param array{
     *     appType?: 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet',
     *     applicationComponentId: string,
     *     configureOnly?: bool,
     *     inclusionStatus?: 'excludeFromAssessment'|'includeInAssessment',
     *     secretsManagerKey?: string,
     *     sourceCodeList?: list<Shapes\SourceCode>,
     *     strategyOption?: Shapes\StrategyOption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
