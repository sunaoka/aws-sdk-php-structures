<?php

namespace Sunaoka\Aws\Structures\Macie2\EnableMacie;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS' $findingPublishingFrequency
 * @property 'PAUSED'|'ENABLED' $status
 */
class EnableMacieRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     findingPublishingFrequency?: 'FIFTEEN_MINUTES'|'ONE_HOUR'|'SIX_HOURS',
     *     status?: 'PAUSED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
