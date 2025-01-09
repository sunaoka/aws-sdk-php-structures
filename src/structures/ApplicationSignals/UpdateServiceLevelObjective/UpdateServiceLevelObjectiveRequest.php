<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Description
 * @property Shapes\ServiceLevelIndicatorConfig $SliConfig
 * @property Shapes\RequestBasedServiceLevelIndicatorConfig $RequestBasedSliConfig
 * @property Shapes\Goal $Goal
 * @property list<Shapes\BurnRateConfiguration> $BurnRateConfigurations
 */
class UpdateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Description?: string,
     *     SliConfig?: Shapes\ServiceLevelIndicatorConfig,
     *     RequestBasedSliConfig?: Shapes\RequestBasedServiceLevelIndicatorConfig,
     *     Goal?: Shapes\Goal,
     *     BurnRateConfigurations?: list<Shapes\BurnRateConfiguration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
