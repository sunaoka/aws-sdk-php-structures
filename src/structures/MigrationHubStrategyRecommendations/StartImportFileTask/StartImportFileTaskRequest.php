<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartImportFileTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $S3Bucket
 * @property 'ApplicationDiscoveryService'|'MPA'|'Import'|'StrategyRecommendationsApplicationDataCollector' $dataSourceType
 * @property list<Shapes\Group> $groupId
 * @property string $name
 * @property string $s3bucketForReportData
 * @property string $s3key
 */
class StartImportFileTaskRequest extends Request
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     dataSourceType?: 'ApplicationDiscoveryService'|'MPA'|'Import'|'StrategyRecommendationsApplicationDataCollector',
     *     groupId?: list<Shapes\Group>,
     *     name: string,
     *     s3bucketForReportData?: string,
     *     s3key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
