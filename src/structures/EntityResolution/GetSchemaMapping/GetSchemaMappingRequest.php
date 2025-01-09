<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetSchemaMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $schemaName
 */
class GetSchemaMappingRequest extends Request
{
    /**
     * @param array{schemaName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
