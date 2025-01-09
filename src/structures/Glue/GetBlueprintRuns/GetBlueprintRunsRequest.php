<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintName
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class GetBlueprintRunsRequest extends Request
{
    /**
     * @param array{
     *     BlueprintName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
