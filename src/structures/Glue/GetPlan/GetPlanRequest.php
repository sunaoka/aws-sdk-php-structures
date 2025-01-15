<?php

namespace Sunaoka\Aws\Structures\Glue\GetPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MappingEntry> $Mapping
 * @property Shapes\CatalogEntry $Source
 * @property list<Shapes\CatalogEntry>|null $Sinks
 * @property Shapes\Location|null $Location
 * @property 'PYTHON'|'SCALA'|null $Language
 * @property array<string, string>|null $AdditionalPlanOptionsMap
 */
class GetPlanRequest extends Request
{
    /**
     * @param array{
     *     Mapping: list<Shapes\MappingEntry>,
     *     Source: Shapes\CatalogEntry,
     *     Sinks?: list<Shapes\CatalogEntry>|null,
     *     Location?: Shapes\Location|null,
     *     Language?: 'PYTHON'|'SCALA'|null,
     *     AdditionalPlanOptionsMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
