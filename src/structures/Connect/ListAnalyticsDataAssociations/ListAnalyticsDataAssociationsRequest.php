<?php

namespace Sunaoka\Aws\Structures\Connect\ListAnalyticsDataAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $DataSetId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListAnalyticsDataAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataSetId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
