<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED' $analysisStatus
 * @property S3Object $antipatternReportS3Object
 * @property 'FAILED'|'IN_PROGRESS'|'SUCCESS' $antipatternReportStatus
 * @property string $antipatternReportStatusMessage
 * @property 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet' $appType
 * @property AppUnitError $appUnitError
 * @property string $associatedServerId
 * @property DatabaseConfigDetail $databaseConfigDetail
 * @property string $id
 * @property 'excludeFromAssessment'|'includeInAssessment' $inclusionStatus
 * @property \Aws\Api\DateTimeResult $lastAnalyzedTimestamp
 * @property list<AntipatternSeveritySummary> $listAntipatternSeveritySummary
 * @property bool $moreServerAssociationExists
 * @property string $name
 * @property string $osDriver
 * @property string $osVersion
 * @property RecommendationSet $recommendationSet
 * @property 'Database'|'Process'|'DatabaseProcess' $resourceSubType
 * @property list<Result> $resultList
 * @property 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED' $runtimeStatus
 * @property string $runtimeStatusMessage
 * @property list<SourceCodeRepository> $sourceCodeRepositories
 * @property string $statusMessage
 */
class ApplicationComponentDetail extends Shape
{
    /**
     * @param array{
     *     analysisStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED'|'ANALYSIS_PARTIAL_SUCCESS'|'UNCONFIGURED'|'CONFIGURED',
     *     antipatternReportS3Object?: S3Object,
     *     antipatternReportStatus?: 'FAILED'|'IN_PROGRESS'|'SUCCESS',
     *     antipatternReportStatusMessage?: string,
     *     appType?: 'DotNetFramework'|'Java'|'SQLServer'|'IIS'|'Oracle'|'Other'|'Tomcat'|'JBoss'|'Spring'|'Mongo DB'|'DB2'|'Maria DB'|'MySQL'|'Sybase'|'PostgreSQLServer'|'Cassandra'|'IBM WebSphere'|'Oracle WebLogic'|'Visual Basic'|'Unknown'|'DotnetCore'|'Dotnet',
     *     appUnitError?: AppUnitError,
     *     associatedServerId?: string,
     *     databaseConfigDetail?: DatabaseConfigDetail,
     *     id?: string,
     *     inclusionStatus?: 'excludeFromAssessment'|'includeInAssessment',
     *     lastAnalyzedTimestamp?: \Aws\Api\DateTimeResult,
     *     listAntipatternSeveritySummary?: list<AntipatternSeveritySummary>,
     *     moreServerAssociationExists?: bool,
     *     name?: string,
     *     osDriver?: string,
     *     osVersion?: string,
     *     recommendationSet?: RecommendationSet,
     *     resourceSubType?: 'Database'|'Process'|'DatabaseProcess',
     *     resultList?: list<Result>,
     *     runtimeStatus?: 'ANALYSIS_TO_BE_SCHEDULED'|'ANALYSIS_STARTED'|'ANALYSIS_SUCCESS'|'ANALYSIS_FAILED',
     *     runtimeStatusMessage?: string,
     *     sourceCodeRepositories?: list<SourceCodeRepository>,
     *     statusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
