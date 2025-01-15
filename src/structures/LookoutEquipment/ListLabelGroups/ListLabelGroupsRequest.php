<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListLabelGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LabelGroupNameBeginsWith
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListLabelGroupsRequest extends Request
{
    /**
     * @param array{
     *     LabelGroupNameBeginsWith?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
