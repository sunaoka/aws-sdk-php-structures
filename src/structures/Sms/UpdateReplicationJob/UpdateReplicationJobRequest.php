<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateReplicationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 * @property int|null $frequency
 * @property \Aws\Api\DateTimeResult|null $nextReplicationRunStartTime
 * @property 'AWS'|'BYOL'|null $licenseType
 * @property string|null $roleName
 * @property string|null $description
 * @property int|null $numberOfRecentAmisToKeep
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 */
class UpdateReplicationJobRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId: string,
     *     frequency?: int|null,
     *     nextReplicationRunStartTime?: \Aws\Api\DateTimeResult|null,
     *     licenseType?: 'AWS'|'BYOL'|null,
     *     roleName?: string|null,
     *     description?: string|null,
     *     numberOfRecentAmisToKeep?: int|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
