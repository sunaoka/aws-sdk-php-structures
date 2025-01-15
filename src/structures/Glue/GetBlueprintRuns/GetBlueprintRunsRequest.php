<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BlueprintName
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetBlueprintRunsRequest extends Request
{
    /**
     * @param array{
     *     BlueprintName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
