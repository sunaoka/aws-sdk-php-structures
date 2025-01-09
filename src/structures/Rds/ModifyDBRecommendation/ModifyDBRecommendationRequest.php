<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommendationId
 * @property string $Locale
 * @property string $Status
 * @property list<Shapes\RecommendedActionUpdate> $RecommendedActionUpdates
 */
class ModifyDBRecommendationRequest extends Request
{
    /**
     * @param array{
     *     RecommendationId: string,
     *     Locale?: string,
     *     Status?: string,
     *     RecommendedActionUpdates?: list<Shapes\RecommendedActionUpdate>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
