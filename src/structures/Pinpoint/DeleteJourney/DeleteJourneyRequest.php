<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $JourneyId
 */
class DeleteJourneyRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     JourneyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
