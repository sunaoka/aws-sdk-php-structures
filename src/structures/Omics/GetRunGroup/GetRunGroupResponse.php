<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property int<1, 100000>|null $maxCpus
 * @property int<1, 100000>|null $maxRuns
 * @property int<1, 100000>|null $maxDuration
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property array<string, string>|null $tags
 * @property int<1, 100000>|null $maxGpus
 */
class GetRunGroupResponse extends Response
{
}
