<?php

namespace Sunaoka\Aws\Structures\Athena\ListDataCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $WorkGroup
 */
class ListDataCatalogsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
