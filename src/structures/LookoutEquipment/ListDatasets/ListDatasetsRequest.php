<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $DatasetNameBeginsWith
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DatasetNameBeginsWith?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
