<?php

namespace Sunaoka\Aws\Structures\Backup\ListRestoreAccessBackupVaults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MpaSessionArn
 * @property 'PENDING'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $InitiationDate
 * @property \Aws\Api\DateTimeResult|null $ExpiryDate
 */
class LatestRevokeRequest extends Shape
{
    /**
     * @param array{
     *     MpaSessionArn?: string|null,
     *     Status?: 'PENDING'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     InitiationDate?: \Aws\Api\DateTimeResult|null,
     *     ExpiryDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
