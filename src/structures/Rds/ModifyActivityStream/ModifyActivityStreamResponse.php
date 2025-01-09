<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $KmsKeyId
 * @property string $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping' $Status
 * @property 'sync'|'async' $Mode
 * @property bool $EngineNativeAuditFieldsIncluded
 * @property 'locked'|'unlocked'|'locking-policy'|'unlocking-policy' $PolicyStatus
 */
class ModifyActivityStreamResponse extends Response
{
}
