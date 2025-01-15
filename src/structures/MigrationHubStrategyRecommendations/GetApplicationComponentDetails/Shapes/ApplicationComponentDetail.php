<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED'|null $analysisStatus
 * @property S3Object|null $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null $antipatternReportStatus
 * @property string|null $antipatternReportStatusMessage
 * @property 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null $appType
 * @property AppUnitError|null $appUnitError
 * @property string|null $associatedServerId
 * @property DatabaseConfigDetail|null $databaseConfigDetail
 * @property string|null $id
 * @property 'excludeFromAssessment'|'includeInAssessment'|null $inclusionStatus
 * @property \Aws\Api\DateTimeResult|null $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary>|null $listAntipatternSeveritySummary
 * @property bool|null $moreServerAssociationExists
 * @property string|null $name
 * @property string|null $osDriver
 * @property string|null $osVersion
 * @property RecommendationSet|null $recommendationSet
 * @property 'Database'|'Process'|'DatabaseProcess'|null $resourceSubType
 * @property list<Result>|null $resultList
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|null $runtimeStatus
 * @property string|null $runtimeStatusMessage
 * @property list<SourceCodeRepository>|null $sourceCodeRepositories
 * @property string|null $statusMessage
 */
class ApplicationComponentDetail extends Shape
{
    /**
     * @param array{
     *     analysisStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED'|null,
     *     antipatternReportS3Object?: S3Object|null,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS'|null,
     *     antipatternReportStatusMessage?: string|null,
     *     appType?: 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet'|null,
     *     appUnitError?: AppUnitError|null,
     *     associatedServerId?: string|null,
     *     databaseConfigDetail?: DatabaseConfigDetail|null,
     *     id?: string|null,
     *     inclusionStatus?: 'excludeFromAssessment'|'includeInAssessment'|null,
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>|null,
     *     moreServerAssociationExists?: bool|null,
     *     name?: string|null,
     *     osDriver?: string|null,
     *     osVersion?: string|null,
     *     recommendationSet?: RecommendationSet|null,
     *     resourceSubType?: 'Database'|'Process'|'DatabaseProcess'|null,
     *     resultList?: list<Result>|null,
     *     runtimeStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|null,
     *     runtimeStatusMessage?: string|null,
     *     sourceCodeRepositories?: list<SourceCodeRepository>|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
