<?php

namespace Sunaoka\Aws\Structures\Backup\ListLegalHolds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED'|null $Status
 * @property string|null $Description
 * @property string|null $LegalHoldId
 * @property string|null $LegalHoldArn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $CancellationDate
 */
class LegalHold extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Status?: 'CREATING'|'ACTIVE'|'CANCELING'|'CANCELED'|null,
     *     Description?: string|null,
     *     LegalHoldId?: string|null,
     *     LegalHoldArn?: string|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     CancellationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
