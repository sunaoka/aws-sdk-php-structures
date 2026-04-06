<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ServiceLevelIndicatorConfig|null $SliConfig
 * @property Shapes\RequestBasedServiceLevelIndicatorConfig|null $RequestBasedSliConfig
 * @property Shapes\Goal|null $Goal
 * @property list<Shapes\Tag>|null $Tags
 * @property list<Shapes\BurnRateConfiguration>|null $BurnRateConfigurations
 */
class CreateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     SliConfig?: Shapes\ServiceLevelIndicatorConfig|null,
     *     RequestBasedSliConfig?: Shapes\RequestBasedServiceLevelIndicatorConfig|null,
     *     Goal?: Shapes\Goal|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     BurnRateConfigurations?: list<Shapes\BurnRateConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
