<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyActivityStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $KmsKeyId
 * @property string|null $KinesisStreamName
 * @property 'stopped'|'starting'|'started'|'stopping'|null $Status
 * @property 'sync'|'async'|null $Mode
 * @property bool|null $EngineNativeAuditFieldsIncluded
 * @property 'locked'|'unlocked'|'locking-policy'|'unlocking-policy'|null $PolicyStatus
 */
class ModifyActivityStreamResponse extends Response
{
}
