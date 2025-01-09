<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListRecordHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceptLanguage
 * @property Shapes\AccessLevelFilter $AccessLevelFilter
 * @property Shapes\ListRecordHistorySearchFilter $SearchFilter
 * @property int $PageSize
 * @property string $PageToken
 */
class ListRecordHistoryRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter,
     *     SearchFilter?: Shapes\ListRecordHistorySearchFilter,
     *     PageSize?: int,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
