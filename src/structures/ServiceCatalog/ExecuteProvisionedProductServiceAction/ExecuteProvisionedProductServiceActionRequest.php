<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ExecuteProvisionedProductServiceAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProvisionedProductId
 * @property string $ServiceActionId
 * @property string $ExecuteToken
 * @property string|null $AcceptLanguage
 * @property array<string, list<string>>|null $Parameters
 */
class ExecuteProvisionedProductServiceActionRequest extends Request
{
    /**
     * @param array{
     *     ProvisionedProductId: string,
     *     ServiceActionId: string,
     *     ExecuteToken: string,
     *     AcceptLanguage?: string|null,
     *     Parameters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
