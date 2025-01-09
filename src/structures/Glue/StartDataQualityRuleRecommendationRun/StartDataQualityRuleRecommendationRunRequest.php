<?php

namespace Sunaoka\Aws\Structures\Glue\StartDataQualityRuleRecommendationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DataSource $DataSource
 * @property string $Role
 * @property int $NumberOfWorkers
 * @property int<1, max> $Timeout
 * @property string $CreatedRulesetName
 * @property string $DataQualitySecurityConfiguration
 * @property string $ClientToken
 */
class StartDataQualityRuleRecommendationRunRequest extends Request
{
    /**
     * @param array{
     *     DataSource: Shapes\DataSource,
     *     Role: string,
     *     NumberOfWorkers?: int,
     *     Timeout?: int<1, max>,
     *     CreatedRulesetName?: string,
     *     DataQualitySecurityConfiguration?: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
