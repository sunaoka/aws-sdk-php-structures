<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $ResourceId
 * @property string|null $ResourceName
 * @property string|null $SubsidiaryAccountId
 * @property string|null $CreatedDate
 */
class SubsidiaryAuthorizationSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     ResourceId?: string|null,
     *     ResourceName?: string|null,
     *     SubsidiaryAccountId?: string|null,
     *     CreatedDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
