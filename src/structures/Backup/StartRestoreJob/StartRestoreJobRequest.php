<?php

namespace Sunaoka\Aws\Structures\Backup\StartRestoreJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryPointArn
 * @property array<string, string> $Metadata
 * @property string $IamRoleArn
 * @property string $IdempotencyToken
 * @property string $ResourceType
 * @property bool $CopySourceTagsToRestoredResource
 */
class StartRestoreJobRequest extends Request
{
    /**
     * @param array{
     *     RecoveryPointArn: string,
     *     Metadata: array<string, string>,
     *     IamRoleArn?: string,
     *     IdempotencyToken?: string,
     *     ResourceType?: string,
     *     CopySourceTagsToRestoredResource?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
