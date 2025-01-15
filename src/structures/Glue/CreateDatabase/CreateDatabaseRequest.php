<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\DatabaseInput $DatabaseInput
 * @property array<string, string>|null $Tags
 */
class CreateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseInput: Shapes\DatabaseInput,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
