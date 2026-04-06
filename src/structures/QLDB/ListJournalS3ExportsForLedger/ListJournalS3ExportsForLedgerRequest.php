<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3ExportsForLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListJournalS3ExportsForLedgerRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
