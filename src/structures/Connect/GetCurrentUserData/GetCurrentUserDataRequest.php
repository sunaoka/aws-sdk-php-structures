<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\UserDataFilters $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetCurrentUserDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters: Shapes\UserDataFilters,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
