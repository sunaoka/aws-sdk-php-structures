<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SKIP'|'REGISTER_AS_NEW' $DuplicateRegistrationAction
 * @property int $FraudsterSimilarityThreshold
 * @property list<string> $WatchlistIds
 */
class RegistrationConfig extends Shape
{
    /**
     * @param array{
     *     DuplicateRegistrationAction?: 'SKIP'|'REGISTER_AS_NEW',
     *     FraudsterSimilarityThreshold?: int,
     *     WatchlistIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
