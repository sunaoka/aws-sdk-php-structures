<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property string|null $DatasetNameBeginsWith
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     DatasetNameBeginsWith?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
