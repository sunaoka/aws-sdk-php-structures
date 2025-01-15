<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CatalogEntry $Source
 * @property list<Shapes\CatalogEntry>|null $Sinks
 * @property Shapes\Location|null $Location
 */
class GetMappingRequest extends Request
{
    /**
     * @param array{
     *     Source: Shapes\CatalogEntry,
     *     Sinks?: list<Shapes\CatalogEntry>|null,
     *     Location?: Shapes\Location|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
