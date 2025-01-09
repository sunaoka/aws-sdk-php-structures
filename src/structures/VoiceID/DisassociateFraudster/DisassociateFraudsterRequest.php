<?php

namespace Sunaoka\Aws\Structures\VoiceID\DisassociateFraudster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainId
 * @property string $FraudsterId
 * @property string $WatchlistId
 */
class DisassociateFraudsterRequest extends Request
{
    /**
     * @param array{
     *     DomainId: string,
     *     FraudsterId: string,
     *     WatchlistId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
