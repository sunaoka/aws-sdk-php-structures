<?php

namespace Sunaoka\Aws\Structures\Connect\ListAnalyticsDataAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string|null $DataSetId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListAnalyticsDataAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     DataSetId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
