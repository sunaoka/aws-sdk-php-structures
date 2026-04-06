<?php

namespace Sunaoka\Aws\Structures\Connect\ListUserProficiencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListUserProficienciesRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
