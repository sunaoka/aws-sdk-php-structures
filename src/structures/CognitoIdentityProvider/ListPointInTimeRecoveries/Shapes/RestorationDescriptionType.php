<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListPointInTimeRecoveries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RestoreId
 * @property 'PREVIEW_GENERATING'|'PREVIEW_GENERATED'|'PREVIEW_CANCELLED'|'PREVIEW_GENERATION_FAILED'|'PREVIEW_EXPIRED'|'RESTORING'|'RESTORE_COMPLETED'|'TEMPORARY_INTERNAL_ERROR_SEE_SUPPORT_CASE'|'AWS_ABORTED'|null $RestoreStatus
 * @property \Aws\Api\DateTimeResult|null $RestoreTimestamp
 */
class RestorationDescriptionType extends Shape
{
    /**
     * @param array{
     *     RestoreId?: string|null,
     *     RestoreStatus?: 'PREVIEW_GENERATING'|'PREVIEW_GENERATED'|'PREVIEW_CANCELLED'|'PREVIEW_GENERATION_FAILED'|'PREVIEW_EXPIRED'|'RESTORING'|'RESTORE_COMPLETED'|'TEMPORARY_INTERNAL_ERROR_SEE_SUPPORT_CASE'|'AWS_ABORTED'|null,
     *     RestoreTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
