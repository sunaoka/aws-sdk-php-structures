<?php

namespace Sunaoka\Aws\Structures\S3Control\GetDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Target
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property int $DurationSeconds
 * @property 'Minimal'|'Default' $Privilege
 * @property 'Object' $TargetType
 */
class GetDataAccessRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Target: string,
     *     Permission: 'READ'|'WRITE'|'READWRITE',
     *     DurationSeconds?: int,
     *     Privilege?: 'Minimal'|'Default',
     *     TargetType?: 'Object'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
