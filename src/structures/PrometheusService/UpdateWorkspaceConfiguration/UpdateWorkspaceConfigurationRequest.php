<?php

namespace Sunaoka\Aws\Structures\PrometheusService\UpdateWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<Shapes\LimitsPerLabelSet>|null $limitsPerLabelSet
 * @property int<1, max>|null $retentionPeriodInDays
 * @property string $workspaceId
 */
class UpdateWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     limitsPerLabelSet?: list<Shapes\LimitsPerLabelSet>|null,
     *     retentionPeriodInDays?: int<1, max>|null,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
