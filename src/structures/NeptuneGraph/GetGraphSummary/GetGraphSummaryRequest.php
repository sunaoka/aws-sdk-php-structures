<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetGraphSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property 'BASIC'|'DETAILED' $mode
 */
class GetGraphSummaryRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     mode?: 'BASIC'|'DETAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
