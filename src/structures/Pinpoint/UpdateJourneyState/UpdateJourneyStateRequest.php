<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourneyState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property Shapes\JourneyStateRequest $JourneyStateRequest
 */
class UpdateJourneyStateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     JourneyStateRequest: Shapes\JourneyStateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
