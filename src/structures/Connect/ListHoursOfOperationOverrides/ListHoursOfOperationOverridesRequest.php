<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListHoursOfOperationOverridesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
