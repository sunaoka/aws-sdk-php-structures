<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 * @property list<string> $ContainsLabels
 * @property bool $Labeled
 * @property string $SourceRefContains
 * @property bool $HasErrors
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     ContainsLabels?: list<string>,
     *     Labeled?: bool,
     *     SourceRefContains?: string,
     *     HasErrors?: bool,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
