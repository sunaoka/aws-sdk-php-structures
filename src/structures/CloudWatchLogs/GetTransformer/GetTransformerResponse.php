<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $logGroupIdentifier
 * @property int $creationTime
 * @property int $lastModifiedTime
 * @property list<Shapes\Processor> $transformerConfig
 */
class GetTransformerResponse extends Response
{
}
