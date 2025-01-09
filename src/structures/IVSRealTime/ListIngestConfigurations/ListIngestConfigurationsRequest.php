<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListIngestConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterByStageArn
 * @property 'ACTIVE'|'INACTIVE' $filterByState
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListIngestConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filterByStageArn?: string,
     *     filterByState?: 'ACTIVE'|'INACTIVE',
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
