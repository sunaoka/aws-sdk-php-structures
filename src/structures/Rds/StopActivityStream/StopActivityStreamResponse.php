<?php

namespace Sunaoka\Aws\Structures\Rds\StopActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KmsKeyId
 * @property string $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping' $Status
 */
class StopActivityStreamResponse extends Response
{
}
