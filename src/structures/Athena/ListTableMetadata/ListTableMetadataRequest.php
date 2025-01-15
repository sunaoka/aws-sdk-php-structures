<?php

namespace Sunaoka\Aws\Structures\Athena\ListTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string $DatabaseName
 * @property string|null $Expression
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string|null $WorkGroup
 */
class ListTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     DatabaseName: string,
     *     Expression?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
