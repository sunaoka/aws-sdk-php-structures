<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 * @property Shapes\WriteJourneyRequest $WriteJourneyRequest
 */
class UpdateJourneyRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string,
     *     WriteJourneyRequest: Shapes\WriteJourneyRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
