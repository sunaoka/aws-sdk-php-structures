<?php

namespace Sunaoka\Aws\Structures\VoiceID\AssociateFraudster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $DomainId
 * @property string|null $GeneratedFraudsterId
 * @property list<string>|null $WatchlistIds
 */
class Fraudster extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     DomainId?: string|null,
     *     GeneratedFraudsterId?: string|null,
     *     WatchlistIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
