<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\ServiceLevelIndicatorConfig $SliConfig
 * @property Shapes\RequestBasedServiceLevelIndicatorConfig $RequestBasedSliConfig
 * @property Shapes\Goal $Goal
 * @property list<Shapes\Tag> $Tags
 * @property list<Shapes\BurnRateConfiguration> $BurnRateConfigurations
 */
class CreateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     SliConfig?: Shapes\ServiceLevelIndicatorConfig,
     *     RequestBasedSliConfig?: Shapes\RequestBasedServiceLevelIndicatorConfig,
     *     Goal?: Shapes\Goal,
     *     Tags?: list<Shapes\Tag>,
     *     BurnRateConfigurations?: list<Shapes\BurnRateConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
