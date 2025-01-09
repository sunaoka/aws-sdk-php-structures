<?php

namespace Sunaoka\Aws\Structures\Athena\ListDataCatalogs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<2, 50> $MaxResults
 * @property string $WorkGroup
 */
class ListDataCatalogsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<2, 50>,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
