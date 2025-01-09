<?php

namespace Sunaoka\Aws\Structures\Glue\GetPlan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MappingEntry> $Mapping
 * @property Shapes\CatalogEntry $Source
 * @property list<Shapes\CatalogEntry> $Sinks
 * @property Shapes\Location $Location
 * @property 'PYTHON'|'SCALA' $Language
 * @property array<string, string> $AdditionalPlanOptionsMap
 */
class GetPlanRequest extends Request
{
    /**
     * @param array{
     *     Mapping: list<Shapes\MappingEntry>,
     *     Source: Shapes\CatalogEntry,
     *     Sinks?: list<Shapes\CatalogEntry>,
     *     Location?: Shapes\Location,
     *     Language?: 'PYTHON'|'SCALA',
     *     AdditionalPlanOptionsMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
