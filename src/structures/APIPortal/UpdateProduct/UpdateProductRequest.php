<?php

namespace Sunaoka\Aws\Structures\APIPortal\UpdateProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 * @property string|null $displayName
 * @property string|null $description
 * @property Shapes\DisplayOrder|null $displayOrder
 * @property Shapes\ApiSelectionConfiguration|null $apiSelectionConfiguration
 */
class UpdateProductRequest extends Request
{
    /**
     * @param array{
     *     productId: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     displayOrder?: Shapes\DisplayOrder|null,
     *     apiSelectionConfiguration?: Shapes\ApiSelectionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
