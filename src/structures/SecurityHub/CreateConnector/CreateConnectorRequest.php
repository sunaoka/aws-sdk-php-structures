<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\CspmProviderConfiguration $Provider
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateConnectorRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Provider: Shapes\CspmProviderConfiguration,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
