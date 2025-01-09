<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property int<1, 100000> $maxCpus
 * @property int<1, 100000> $maxRuns
 * @property int<1, 100000> $maxDuration
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property array<string, string> $tags
 * @property int<1, 100000> $maxGpus
 */
class GetRunGroupResponse extends Response
{
}
