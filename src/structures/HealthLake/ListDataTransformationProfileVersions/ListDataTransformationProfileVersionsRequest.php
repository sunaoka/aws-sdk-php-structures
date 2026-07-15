<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationProfileVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProfileId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataTransformationProfileVersionsRequest extends Request
{
    /**
     * @param array{
     *     ProfileId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
