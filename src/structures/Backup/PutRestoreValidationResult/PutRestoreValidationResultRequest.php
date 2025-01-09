<?php

namespace Sunaoka\Aws\Structures\Backup\PutRestoreValidationResult;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RestoreJobId
 * @property 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING' $ValidationStatus
 * @property string $ValidationStatusMessage
 */
class PutRestoreValidationResultRequest extends Request
{
    /**
     * @param array{
     *     RestoreJobId: string,
     *     ValidationStatus: 'FAILED'|'SUCCESSFUL'|'TIMED_OUT'|'VALIDATING',
     *     ValidationStatusMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
