<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\WriteJourneyRequest $WriteJourneyRequest
 */
class CreateJourneyRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     WriteJourneyRequest: Shapes\WriteJourneyRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
