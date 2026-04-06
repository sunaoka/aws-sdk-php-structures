<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\UpdateServiceLevelObjective;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Description
 * @property Shapes\ServiceLevelIndicatorConfig|null $SliConfig
 * @property Shapes\Goal|null $Goal
 */
class UpdateServiceLevelObjectiveRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Description?: string|null,
     *     SliConfig?: Shapes\ServiceLevelIndicatorConfig|null,
     *     Goal?: Shapes\Goal|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
