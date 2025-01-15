<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SearchChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ChimeBearer
 * @property list<Shapes\SearchField> $Fields
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class SearchChannelsRequest extends Request
{
    /**
     * @param array{
     *     ChimeBearer?: string|null,
     *     Fields: list<Shapes\SearchField>,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
