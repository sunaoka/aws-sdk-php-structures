<?php

namespace Sunaoka\Aws\Structures\Sms\CreateReplicationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serverId
 * @property \Aws\Api\DateTimeResult $seedReplicationTime
 * @property int $frequency
 * @property bool $runOnce
 * @property 'AWS'|'BYOL' $licenseType
 * @property string $roleName
 * @property string $description
 * @property int $numberOfRecentAmisToKeep
 * @property bool $encrypted
 * @property string $kmsKeyId
 */
class CreateReplicationJobRequest extends Request
{
    /**
     * @param array{
     *     serverId: string,
     *     seedReplicationTime: \Aws\Api\DateTimeResult,
     *     frequency?: int,
     *     runOnce?: bool,
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
