<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property string $TransactionId
 * @property \Aws\Api\DateTimeResult $QueryAsOfTime
 * @property bool $IncludeStatusDetails
 */
class GetTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     Name: string,
     *     TransactionId?: string,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult,
     *     IncludeStatusDetails?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
