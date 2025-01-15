<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $Name
 * @property Shapes\ConnectionInput $ConnectionInput
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name: string,
     *     ConnectionInput: Shapes\ConnectionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
