<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetEntries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 * @property list<string>|null $ContainsLabels
 * @property bool|null $Labeled
 * @property string|null $SourceRefContains
 * @property bool|null $HasErrors
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListDatasetEntriesRequest extends Request
{
    /**
     * @param array{
     *     DatasetArn: string,
     *     ContainsLabels?: list<string>|null,
     *     Labeled?: bool|null,
     *     SourceRefContains?: string|null,
     *     HasErrors?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
