<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property string|null $PageSize
 * @property string|null $Token
 */
class GetJourneyRunsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     PageSize?: string|null,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
