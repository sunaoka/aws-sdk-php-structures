<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabelGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelGroupNameBeginsWith
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListLabelGroupsRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupNameBeginsWith?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
