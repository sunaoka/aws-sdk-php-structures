<?php

namespace Sunaoka\Aws\Structures\Backup\ListLegalHolds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED' $Status
 * @property string $Description
 * @property string $LegalHoldId
 * @property string $LegalHoldArn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $CancellationDate
 */
class LegalHold extends Shape
{
    /**
     * @param array{
     *     Title?: string,
     *     Status?: 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED',
     *     Description?: string,
     *     LegalHoldId?: string,
     *     LegalHoldArn?: string,
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     CancellationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
