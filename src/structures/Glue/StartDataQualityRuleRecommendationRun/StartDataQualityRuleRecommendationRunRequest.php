<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int|null $NumberOfWorkers
 * @property int<1, max>|null $Timeout
 * @property string|null $CreatedRulesetName
 * @property string|null $DataQualitySecurityConfiguration
 * @property string|null $ClientToken
 */
class StartDataQualityRuleRecommendationRunRequest extends Request
{
    /**
     * @param array{
     *     DataSource: Shapes\DataSource,
     *     Role: string,
     *     NumberOfWorkers?: int|null,
     *     Timeout?: int<1, max>|null,
     *     CreatedRulesetName?: string|null,
     *     DataQualitySecurityConfiguration?: string|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
