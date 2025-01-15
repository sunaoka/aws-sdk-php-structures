<?php

namespace Sunaoka\Aws\Structures\Glue\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\ConnectionInput $ConnectionInput
 * @property array<string, string>|null $Tags
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ConnectionInput: Shapes\ConnectionInput,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
