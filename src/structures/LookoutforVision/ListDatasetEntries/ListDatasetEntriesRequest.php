<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 * @property bool $Labeled
 * @property string $AnomalyClass
 * @property \Aws\Api\DateTimeResult $BeforeCreationDate
 * @property \Aws\Api\DateTimeResult $AfterCreationDate
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $SourceRefContains
 */
class ListDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string,
     *     Labeled?: bool,
     *     AnomalyClass?: string,
     *     BeforeCreationDate?: \Aws\Api\DateTimeResult,
     *     AfterCreationDate?: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     SourceRefContains?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
