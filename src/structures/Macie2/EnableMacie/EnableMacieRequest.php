<?php

namespace Sunaoka\Aws\Structures\Macie2\EnableMacie;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null $findingPublishingFrequency
 * @property 'PAUSED'|'ENABLED'|null $status
 */
class EnableMacieRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     findingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS'|null,
     *     status?: 'PAUSED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
