<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property string $failureCause
 * @property string $schemaName
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 */
class SelfGrantStatusDetail extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     failureCause?: string,
     *     schemaName?: string,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'GRANT_FAILED'|'REVOKE_FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
