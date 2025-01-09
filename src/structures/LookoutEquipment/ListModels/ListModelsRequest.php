<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS' $Status
 * @property string $ModelNameBeginsWith
 * @property string $DatasetNameBeginsWith
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS',
     *     ModelNameBeginsWith?: string,
     *     DatasetNameBeginsWith?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
