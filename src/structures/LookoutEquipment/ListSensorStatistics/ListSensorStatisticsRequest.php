<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string|null $IngestionJobId
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSensorStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     IngestionJobId?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
