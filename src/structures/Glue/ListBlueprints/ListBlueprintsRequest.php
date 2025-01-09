<?php

namespace Sunaoka\Aws\Structures\Glue\ListBlueprints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 25> $MaxResults
 * @property array<string, string> $Tags
 */
class ListBlueprintsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 25>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
