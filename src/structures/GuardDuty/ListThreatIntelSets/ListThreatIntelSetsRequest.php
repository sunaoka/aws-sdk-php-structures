<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListThreatIntelSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListThreatIntelSetsRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
