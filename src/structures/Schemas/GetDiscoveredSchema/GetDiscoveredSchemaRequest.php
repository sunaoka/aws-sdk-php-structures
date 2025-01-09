<?php

namespace Sunaoka\Aws\Structures\Schemas\GetDiscoveredSchema;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Events
 * @property 'OpenApi3' $Type
 */
class GetDiscoveredSchemaRequest extends Request
{
    /**
     * @param array{
     *     Events: list<string>,
     *     Type: 'OpenApi3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
