<?php

namespace Sunaoka\Aws\Structures\Backup\ListBackupAccessPointsByRecoveryPoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $RecoveryPointArn
 */
class ListBackupAccessPointsByRecoveryPointRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     RecoveryPointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
