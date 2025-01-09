<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByLegalHold;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LegalHoldId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListRecoveryPointsByLegalHoldRequest extends Request
{
    /**
     * @param array{
     *     LegalHoldId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
