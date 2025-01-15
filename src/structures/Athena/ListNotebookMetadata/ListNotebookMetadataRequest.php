<?php

namespace Sunaoka\Aws\Structures\Athena\ListNotebookMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterDefinition|null $Filters
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string $WorkGroup
 */
class ListNotebookMetadataRequest extends Request
{
    /**
     * @param array{
     *     Filters?: Shapes\FilterDefinition|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     WorkGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
