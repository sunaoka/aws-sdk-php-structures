<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string $PageSize
 * @property string $Token
 */
class GetJourneyRunsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     PageSize?: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
