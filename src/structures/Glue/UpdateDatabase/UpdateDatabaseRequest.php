<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $Name
 * @property Shapes\DatabaseInput $DatabaseInput
 */
class UpdateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Name: string,
     *     DatabaseInput: Shapes\DatabaseInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
