<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CatalogEntry $Source
 * @property list<Shapes\CatalogEntry> $Sinks
 * @property Shapes\Location $Location
 */
class GetMappingRequest extends Request
{
    /**
     * @param array{
     *     Source: Shapes\CatalogEntry,
     *     Sinks?: list<Shapes\CatalogEntry>,
     *     Location?: Shapes\Location
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
