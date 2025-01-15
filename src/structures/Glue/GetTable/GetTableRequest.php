<?php

namespace Sunaoka\Aws\Structures\Glue\GetTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $Name
 * @property string|null $TransactionId
 * @property \Aws\Api\DateTimeResult|null $QueryAsOfTime
 * @property bool|null $IncludeStatusDetails
 */
class GetTableRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     Name: string,
     *     TransactionId?: string|null,
     *     QueryAsOfTime?: \Aws\Api\DateTimeResult|null,
     *     IncludeStatusDetails?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
