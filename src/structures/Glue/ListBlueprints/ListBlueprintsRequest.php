<?php

namespace Sunaoka\Aws\Structures\Glue\ListBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 25>|null $MaxResults
 * @property array<string, string>|null $Tags
 */
class ListBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 25>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
