<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RecommendationId
 * @property string|null $Locale
 * @property string|null $Status
 * @property list<Shapes\RecommendedActionUpdate>|null $RecommendedActionUpdates
 */
class ModifyDBRecommendationRequest extends Request
{
    /**
     * @param array{
     *     RecommendationId: string,
     *     Locale?: string|null,
     *     Status?: string|null,
     *     RecommendedActionUpdates?: list<Shapes\RecommendedActionUpdate>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
