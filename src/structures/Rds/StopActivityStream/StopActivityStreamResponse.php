<?php

namespace Sunaoka\Aws\Structures\Rds\StopActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KmsKeyId
 * @property string|null $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping'|null $Status
 */
class StopActivityStreamResponse extends Response
{
}
