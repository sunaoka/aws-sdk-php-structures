<?php

namespace Sunaoka\Aws\Structures\Rds\StartActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KmsKeyId
 * @property string|null $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping'|null $Status
 * @property 'sync'|'async'|null $Mode
 * @property bool|null $ApplyImmediately
 * @property bool|null $EngineNativeAuditFieldsIncluded
 */
class StartActivityStreamResponse extends Response
{
}
