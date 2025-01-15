<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateMacieSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $findingPublishingFrequency
 * @property 'PAUSED'|'ENABLED'|null $status
 */
class UpdateMacieSessionRequest extends Request
{
    /**
     * @param array{
     *     findingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null,
     *     status?: 'PAUSED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
