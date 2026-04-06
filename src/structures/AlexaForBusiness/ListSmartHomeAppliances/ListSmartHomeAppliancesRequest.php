<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\ListSmartHomeAppliances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RoomArn
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSmartHomeAppliancesRequest extends Request
{
    /**
     * @param array{
     *     RoomArn: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
