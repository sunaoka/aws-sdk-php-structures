<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $seedTime
 * @property int $frequency
 * @property bool $runOnce
 * @property 'AWS'|'BYOL' $licenseType
 * @property int $numberOfRecentAmisToKeep
 * @property bool $encrypted
 * @property string $kmsKeyId
 */
class ServerReplicationParameters extends Shape
{
    /**
     * @param array{
     *     seedTime?: \Aws\Api\DateTimeResult,
     *     frequency?: int,
     *     runOnce?: bool,
     *     licenseType?: 'AWS'|'BYOL',
     *     numberOfRecentAmisToKeep?: int,
     *     encrypted?: bool,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
