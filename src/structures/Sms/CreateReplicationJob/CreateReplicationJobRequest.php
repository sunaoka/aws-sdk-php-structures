<?php

namespace Sunaoka\Aws\Structures\Sms\CreateReplicationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serverId
 * @property \Aws\Api\DateTimeResult $seedReplicationTime
 * @property int|null $frequency
 * @property bool|null $runOnce
 * @property 'AWS'|'BYOL'|null $licenseType
 * @property string|null $roleName
 * @property string|null $description
 * @property int|null $numberOfRecentAmisToKeep
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 */
class CreateReplicationJobRequest extends Request
{
    /**
     * @param array{
     *     serverId: string,
     *     seedReplicationTime: \Aws\Api\DateTimeResult,
     *     frequency?: int|null,
     *     runOnce?: bool|null,
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
