<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListDatasets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 * @property string $DatasetNameBeginsWith
 */
class ListDatasetsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>,
     *     DatasetNameBeginsWith?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
