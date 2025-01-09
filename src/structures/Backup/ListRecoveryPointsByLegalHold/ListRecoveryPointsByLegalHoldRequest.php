<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LegalHoldId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class ListRecoveryPointsByLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     LegalHoldId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
