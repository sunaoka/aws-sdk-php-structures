<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateReplicationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $replicationJobId
 * @property int $frequency
 * @property \Aws\Api\DateTimeResult $nextReplicationRunStartTime
 * @property 'AWS'|'BYOL' $licenseType
 * @property string $roleName
 * @property string $description
 * @property int $numberOfRecentAmisToKeep
 * @property bool $encrypted
 * @property string $kmsKeyId
 */
class UpdateReplicationJobRequest extends Request
{
    /**
     * @param array{
     *     replicationJobId: string,
     *     frequency?: int,
     *     nextReplicationRunStartTime?: \Aws\Api\DateTimeResult,
     *     licenseType?: 'AWS'|'BYOL',
     *     roleName?: string,
     *     description?: string,
     *     numberOfRecentAmisToKeep?: int,
     *     encrypted?: bool,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
