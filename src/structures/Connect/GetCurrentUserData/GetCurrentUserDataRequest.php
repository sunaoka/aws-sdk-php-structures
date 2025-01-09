<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentUserData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\UserDataFilters $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetCurrentUserDataRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     Filters: Shapes\UserDataFilters,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
