<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartContinuousExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $exportId
 * @property string|null $s3Bucket
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'AGENT'|null $dataSource
 * @property array<string, string>|null $schemaStorageConfig
 */
class StartContinuousExportResponse extends Response
{
}
