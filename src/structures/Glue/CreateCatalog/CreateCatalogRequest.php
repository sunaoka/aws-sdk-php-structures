<?php

namespace Sunaoka\Aws\Structures\Glue\CreateCatalog;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\CatalogInput $CatalogInput
 * @property array<string, string> $Tags
 */
class CreateCatalogRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CatalogInput: Shapes\CatalogInput,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
