<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $logGroupIdentifier
 * @property int<0, max> $creationTime
 * @property int<0, max> $lastModifiedTime
 * @property list<Shapes\Processor> $transformerConfig
 */
class GetTransformerResponse extends Response
{
}
