<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CountryName
 * @property string|null $AsnOrg
 * @property string|null $ThreatListName
 * @property string|null $ThreatName
 */
class Enrichment extends Shape
{
    /**
     * @param array{
     *     CountryName?: string|null,
     *     AsnOrg?: string|null,
     *     ThreatListName?: string|null,
     *     ThreatName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
