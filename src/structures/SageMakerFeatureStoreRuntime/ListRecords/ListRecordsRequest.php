<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\ListRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $IncludeSoftDeletedRecords
 */
class ListRecordsRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     IncludeSoftDeletedRecords?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
