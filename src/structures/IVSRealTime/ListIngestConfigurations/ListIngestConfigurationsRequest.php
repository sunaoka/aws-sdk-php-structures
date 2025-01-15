<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListIngestConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $filterByStageArn
 * @property 'ACTIVE'|'INACTIVE'|null $filterByState
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIngestConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     filterByStageArn?: string|null,
     *     filterByState?: 'ACTIVE'|'INACTIVE'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
