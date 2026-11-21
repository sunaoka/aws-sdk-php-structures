<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property string|null $description
 * @property array<string, string>|null $tags
 * @property Shapes\ApiSelectionConfiguration|null $apiSelectionConfiguration
 */
class CreateProductRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null,
     *     apiSelectionConfiguration?: Shapes\ApiSelectionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
