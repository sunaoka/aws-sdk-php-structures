<?php

namespace Sunaoka\Aws\Structures\Backup\CancelLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LegalHoldId
 * @property string $CancelDescription
 * @property int|null $RetainRecordInDays
 */
class CancelLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     LegalHoldId: string,
     *     CancelDescription: string,
     *     RetainRecordInDays?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
