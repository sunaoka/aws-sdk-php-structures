<?php

namespace Sunaoka\Aws\Structures\EntityResolution\StartIdMappingJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property list<Shapes\IdMappingJobOutputSource>|null $outputSourceConfig
 * @property 'BATCH'|'INCREMENTAL'|'DELETE_ONLY'|null $jobType
 */
class StartIdMappingJobResponse extends Response
{
}
