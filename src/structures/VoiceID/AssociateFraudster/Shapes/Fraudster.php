<?php

namespace Sunaoka\Aws\Structures\VoiceID\AssociateFraudster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $DomainId
 * @property string $GeneratedFraudsterId
 * @property list<string> $WatchlistIds
 */
class Fraudster extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     DomainId?: string,
     *     GeneratedFraudsterId?: string,
     *     WatchlistIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
