<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateConnectorV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\ProviderConfiguration $Provider
 * @property string|null $KmsKeyArn
 * @property array<string, string>|null $Tags
 * @property string|null $ClientToken
 */
class CreateConnectorV2Request extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     Provider: Shapes\ProviderConfiguration,
     *     KmsKeyArn?: string|null,
     *     Tags?: array<string, string>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
