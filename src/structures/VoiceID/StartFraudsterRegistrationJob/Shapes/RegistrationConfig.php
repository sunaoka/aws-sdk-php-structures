<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP'|'REGISTER_AS_NEW'|null $DuplicateRegistrationAction
 * @property int<0, 100>|null $FraudsterSimilarityThreshold
 * @property list<string>|null $WatchlistIds
 */
class RegistrationConfig extends Shape
{
    /**
     * @param array{
     *     DuplicateRegistrationAction?: 'SKIP'|'REGISTER_AS_NEW'|null,
     *     FraudsterSimilarityThreshold?: int<0, 100>|null,
     *     WatchlistIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
