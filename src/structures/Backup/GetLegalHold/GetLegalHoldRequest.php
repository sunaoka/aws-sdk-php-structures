<?php

namespace Sunaoka\Aws\Structures\Backup\GetLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LegalHoldId
 */
class GetLegalHoldRequest extends Request
{
    /**
     * @param array{LegalHoldId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
