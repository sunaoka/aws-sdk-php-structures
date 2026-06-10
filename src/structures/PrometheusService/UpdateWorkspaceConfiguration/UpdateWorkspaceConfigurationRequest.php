<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $clientToken
 * @property list<Shapes\LimitsPerLabelSet>|null $limitsPerLabelSet
 * @property int<1, max>|null $retentionPeriodInDays
 * @property int<0, max>|null $outOfOrderTimeWindowInSeconds
 * @property int<0, max>|null $ruleQueryOffsetInSeconds
 */
class UpdateWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     clientToken?: string|null,
     *     limitsPerLabelSet?: list<Shapes\LimitsPerLabelSet>|null,
     *     retentionPeriodInDays?: int<1, max>|null,
     *     outOfOrderTimeWindowInSeconds?: int<0, max>|null,
     *     ruleQueryOffsetInSeconds?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
