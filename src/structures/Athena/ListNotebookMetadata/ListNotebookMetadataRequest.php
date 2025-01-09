<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterDefinition $Filters
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property string $WorkGroup
 */
class ListNotebookMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\FilterDefinition,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     WorkGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
