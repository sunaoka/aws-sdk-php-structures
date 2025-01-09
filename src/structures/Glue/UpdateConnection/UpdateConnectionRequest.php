<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $Name
 * @property Shapes\ConnectionInput $ConnectionInput
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string,
     *     ConnectionInput: Shapes\ConnectionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
