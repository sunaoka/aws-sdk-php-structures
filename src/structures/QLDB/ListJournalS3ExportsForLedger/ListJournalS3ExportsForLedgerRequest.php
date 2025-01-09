<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3ExportsForLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListJournalS3ExportsForLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
