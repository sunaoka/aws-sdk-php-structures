<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\InitiatePointInTimeRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RestoreId
 * @property 'PREVIEW_GENERATING'|'PREVIEW_GENERATED'|'PREVIEW_CANCELLED'|'PREVIEW_GENERATION_FAILED'|'PREVIEW_EXPIRED'|'RESTORING'|'RESTORE_COMPLETED'|'TEMPORARY_INTERNAL_ERROR_SEE_SUPPORT_CASE'|'AWS_ABORTED'|null $RestoreStatus
 * @property \Aws\Api\DateTimeResult|null $RestoreTimestamp
 * @property \Aws\Api\DateTimeResult|null $TriggerTimestamp
 * @property list<RestorePreviewType>|null $RestorePreview
 */
class RestorationType extends Shape
{
    /**
     * @param array{
     *     RestoreId?: string|null,
     *     RestoreStatus?: 'PREVIEW_GENERATING'|'PREVIEW_GENERATED'|'PREVIEW_CANCELLED'|'PREVIEW_GENERATION_FAILED'|'PREVIEW_EXPIRED'|'RESTORING'|'RESTORE_COMPLETED'|'TEMPORARY_INTERNAL_ERROR_SEE_SUPPORT_CASE'|'AWS_ABORTED'|null,
     *     RestoreTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TriggerTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RestorePreview?: list<RestorePreviewType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
