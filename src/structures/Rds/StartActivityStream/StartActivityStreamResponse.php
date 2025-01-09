<?php

namespace Sunaoka\Aws\Structures\Rds\StartActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KmsKeyId
 * @property string $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping' $Status
 * @property 'sync'|'async' $Mode
 * @property bool $ApplyImmediately
 * @property bool $EngineNativeAuditFieldsIncluded
 */
class StartActivityStreamResponse extends Response
{
}
