<?php

namespace Sunaoka\Aws\Structures\Athena\ListTableMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string $DatabaseName
 * @property string $Expression
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property string $WorkGroup
 */
class ListTableMetadataRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     DatabaseName: string,
     *     Expression?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
