<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteUserJourney;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $systemArn
 * @property string $userJourneyId
 */
class DeleteUserJourneyRequest extends Request
{
    /**
     * @param array{
     *     systemArn: string,
     *     userJourneyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
