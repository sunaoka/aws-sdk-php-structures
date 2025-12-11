<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreatePortalProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $DisplayName
 * @property array<string, string>|null $Tags
 */
class CreatePortalProductRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DisplayName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
