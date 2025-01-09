<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateMacieSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $findingPublishingFrequency
 * @property 'PAUSED'|'ENABLED' $status
 */
class UpdateMacieSessionRequest extends Request
{
    /**
     * @param array{
     *     findingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS',
     *     status?: 'PAUSED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
