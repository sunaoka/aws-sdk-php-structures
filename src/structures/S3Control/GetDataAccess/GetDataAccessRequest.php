<?php

namespace Sunaoka\Aws\Structures\S3Control\GetDataAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Target
 * @property 'READ'|'WRITE'|'READWRITE' $Permission
 * @property int<900, 43200>|null $DurationSeconds
 * @property 'Minimal'|'Default'|null $Privilege
 * @property 'Object'|null $TargetType
 */
class GetDataAccessRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Target: string,
     *     Permission: 'READ'|'WRITE'|'READWRITE',
     *     DurationSeconds?: int<900, 43200>|null,
     *     Privilege?: 'Minimal'|'Default'|null,
     *     TargetType?: 'Object'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
