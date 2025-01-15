<?php

namespace Sunaoka\Aws\Structures\Backup\StartRestoreJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecoveryPointArn
 * @property array<string, string> $Metadata
 * @property string|null $IamRoleArn
 * @property string|null $IdempotencyToken
 * @property string|null $ResourceType
 * @property bool|null $CopySourceTagsToRestoredResource
 */
class StartRestoreJobRequest extends Request
{
    /**
     * @param array{
     *     RecoveryPointArn: string,
     *     Metadata: array<string, string>,
     *     IamRoleArn?: string|null,
     *     IdempotencyToken?: string|null,
     *     ResourceType?: string|null,
     *     CopySourceTagsToRestoredResource?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
