<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $IngestionJobId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSensorStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     IngestionJobId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
