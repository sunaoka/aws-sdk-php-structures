<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartImportFileTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $S3Bucket
 * @property 'ApplicationDiscoveryService'|'MPA'|'Import'|'StrategyRecommendationsApplicationDataCollector'|null $dataSourceType
 * @property list<Shapes\Group>|null $groupId
 * @property string $name
 * @property string|null $s3bucketForReportData
 * @property string $s3key
 */
class StartImportFileTaskRequest extends Request
{
    /**
     * @param array{
     *     S3Bucket: string,
     *     dataSourceType?: 'ApplicationDiscoveryService'|'MPA'|'Import'|'StrategyRecommendationsApplicationDataCollector'|null,
     *     groupId?: list<Shapes\Group>|null,
     *     name: string,
     *     s3bucketForReportData?: string|null,
     *     s3key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
