<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\CreateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ServiceLevelIndicatorConfig $SliConfig
 * @property Shapes\Goal|null $Goal
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     SliConfig: Shapes\ServiceLevelIndicatorConfig,
     *     Goal?: Shapes\Goal|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
