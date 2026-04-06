<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 * @property string|null $schemaName
 * @property 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'GRANT_FAILED'|'REVOKE_FAILED' $status
 * @property string|null $failureCause
 */
class SelfGrantStatusDetail extends Shape
{
    /**
     * @param array{
     *     databaseName: string,
     *     schemaName?: string|null,
     *     status: 'GRANT_PENDING'|'REVOKE_PENDING'|'GRANT_IN_PROGRESS'|'REVOKE_IN_PROGRESS'|'GRANTED'|'GRANT_FAILED'|'REVOKE_FAILED',
     *     failureCause?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
