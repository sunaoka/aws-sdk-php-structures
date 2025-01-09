<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartContinuousExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $exportId
 * @property string $s3Bucket
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'AGENT' $dataSource
 * @property array<string, string> $schemaStorageConfig
 */
class StartContinuousExportResponse extends Response
{
}
