<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Description
 * @property Shapes\ServiceLevelIndicatorConfig|null $SliConfig
 * @property Shapes\RequestBasedServiceLevelIndicatorConfig|null $RequestBasedSliConfig
 * @property Shapes\Goal|null $Goal
 * @property list<Shapes\BurnRateConfiguration>|null $BurnRateConfigurations
 */
class UpdateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Description?: string|null,
     *     SliConfig?: Shapes\ServiceLevelIndicatorConfig|null,
     *     RequestBasedSliConfig?: Shapes\RequestBasedServiceLevelIndicatorConfig|null,
     *     Goal?: Shapes\Goal|null,
     *     BurnRateConfigurations?: list<Shapes\BurnRateConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
