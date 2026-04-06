<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $seedTime
 * @property int|null $frequency
 * @property bool|null $runOnce
 * @property 'AWS'|'BYOL'|null $licenseType
 * @property int|null $numberOfRecentAmisToKeep
 * @property bool|null $encrypted
 * @property string|null $kmsKeyId
 */
class ServerReplicationParameters extends Shape
{
    /**
     * @param array{
     *     seedTime?: \Aws\Api\DateTimeResult|null,
     *     frequency?: int|null,
     *     runOnce?: bool|null,
     *     licenseType?: 'AWS'|'BYOL'|null,
     *     numberOfRecentAmisToKeep?: int|null,
     *     encrypted?: bool|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
