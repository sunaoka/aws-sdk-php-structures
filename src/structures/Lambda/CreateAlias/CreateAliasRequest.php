<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Name
 * @property string $FunctionVersion
 * @property string|null $Description
 * @property Shapes\AliasRoutingConfiguration|null $RoutingConfig
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Name: string,
     *     FunctionVersion: string,
     *     Description?: string|null,
     *     RoutingConfig?: Shapes\AliasRoutingConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
