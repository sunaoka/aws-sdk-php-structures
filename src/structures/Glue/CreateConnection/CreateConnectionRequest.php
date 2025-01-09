<?php

namespace Sunaoka\Aws\Structures\Glue\CreateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\ConnectionInput $ConnectionInput
 * @property array<string, string> $Tags
 */
class CreateConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ConnectionInput: Shapes\ConnectionInput,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
