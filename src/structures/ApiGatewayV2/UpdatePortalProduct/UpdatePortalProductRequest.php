<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdatePortalProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property Shapes\DisplayOrder|null $DisplayOrder
 * @property string $PortalProductId
 */
class UpdatePortalProductRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DisplayName?: string|null,
     *     DisplayOrder?: Shapes\DisplayOrder|null,
     *     PortalProductId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
