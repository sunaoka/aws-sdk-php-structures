<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceName
 * @property string $dataSourceType
 */
class GetLogFieldsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceName: string,
     *     dataSourceType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
