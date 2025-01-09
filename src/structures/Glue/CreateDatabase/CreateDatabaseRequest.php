<?php

namespace Sunaoka\Aws\Structures\Glue\CreateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\DatabaseInput $DatabaseInput
 * @property array<string, string> $Tags
 */
class CreateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseInput: Shapes\DatabaseInput,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
