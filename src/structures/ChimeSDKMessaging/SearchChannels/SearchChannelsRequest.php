<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SearchChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChimeBearer
 * @property list<Shapes\SearchField> $Fields
 * @property int $MaxResults
 * @property string $NextToken
 */
class SearchChannelsRequest extends Request
{
    /**
     * @param array{
     *     ChimeBearer?: string,
     *     Fields: list<Shapes\SearchField>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
