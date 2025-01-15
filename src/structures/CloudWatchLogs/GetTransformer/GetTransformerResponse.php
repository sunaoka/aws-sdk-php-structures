<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $logGroupIdentifier
 * @property int<0, max>|null $creationTime
 * @property int<0, max>|null $lastModifiedTime
 * @property list<Shapes\Processor>|null $transformerConfig
 */
class GetTransformerResponse extends Response
{
}
