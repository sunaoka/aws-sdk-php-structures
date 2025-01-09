<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property int $maxCpus
 * @property int $maxRuns
 * @property int $maxDuration
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property array<string, string> $tags
 * @property int $maxGpus
 */
class GetRunGroupResponse extends Response
{
}
