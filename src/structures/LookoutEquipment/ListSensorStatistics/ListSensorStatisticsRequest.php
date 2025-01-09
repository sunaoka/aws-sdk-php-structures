<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property string $IngestionJobId
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 */
class ListSensorStatisticsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName: string,
     *     IngestionJobId?: string,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
