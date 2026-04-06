<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DurableExecutionArn
 * @property bool|null $IncludeExecutionData
 * @property int<0, 1000>|null $MaxItems
 * @property string|null $Marker
 * @property bool|null $ReverseOrder
 */
class GetDurableExecutionHistoryRequest extends Request
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     IncludeExecutionData?: bool|null,
     *     MaxItems?: int<0, 1000>|null,
     *     Marker?: string|null,
     *     ReverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
