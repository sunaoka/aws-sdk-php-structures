<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListRecordHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AcceptLanguage
 * @property Shapes\AccessLevelFilter|null $AccessLevelFilter
 * @property Shapes\ListRecordHistorySearchFilter|null $SearchFilter
 * @property int<0, 20>|null $PageSize
 * @property string|null $PageToken
 */
class ListRecordHistoryRequest extends Request
{
    /**
     * @param array{
     *     AcceptLanguage?: string|null,
     *     AccessLevelFilter?: Shapes\AccessLevelFilter|null,
     *     SearchFilter?: Shapes\ListRecordHistorySearchFilter|null,
     *     PageSize?: int<0, 20>|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
