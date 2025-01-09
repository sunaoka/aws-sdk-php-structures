<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $Name
 * @property Shapes\DatabaseInput $DatabaseInput
 */
class UpdateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Name: string,
     *     DatabaseInput: Shapes\DatabaseInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
