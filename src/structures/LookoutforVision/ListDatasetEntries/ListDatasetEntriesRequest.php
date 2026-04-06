<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property bool|null $Labeled
 * @property string|null $AnomalyClass
 * @property \Aws\Api\DateTimeResult|null $BeforeCreationDate
 * @property \Aws\Api\DateTimeResult|null $AfterCreationDate
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $SourceRefContains
 */
class ListDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     Labeled?: bool|null,
     *     AnomalyClass?: string|null,
     *     BeforeCreationDate?: \Aws\Api\DateTimeResult|null,
     *     AfterCreationDate?: \Aws\Api\DateTimeResult|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SourceRefContains?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
