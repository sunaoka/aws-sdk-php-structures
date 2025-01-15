<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LegalHoldId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListRecoveryPointsByLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     LegalHoldId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
