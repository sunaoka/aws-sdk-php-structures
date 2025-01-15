<?php

namespace Sunaoka\Aws\Structures\FMS\PutProtocolsList;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProtocolsListData $ProtocolsList
 * @property list<Shapes\Tag>|null $TagList
 */
class PutProtocolsListRequest extends Request
{
    /**
     * @param array{
     *     ProtocolsList: Shapes\ProtocolsListData,
     *     TagList?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
