<?php

namespace Sunaoka\Aws\Structures\Connect\ListHoursOfOperationOverrides;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $HoursOfOperationId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListHoursOfOperationOverridesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     HoursOfOperationId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
