<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null $Status
 * @property string|null $ModelNameBeginsWith
 * @property string|null $DatasetNameBeginsWith
 */
class ListModelsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     Status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|'IMPORT_IN_PROGRESS'|null,
     *     ModelNameBeginsWith?: string|null,
     *     DatasetNameBeginsWith?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
