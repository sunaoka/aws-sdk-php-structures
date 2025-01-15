<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Name
 * @property string|null $FunctionVersion
 * @property string|null $Description
 * @property Shapes\AliasRoutingConfiguration|null $RoutingConfig
 * @property string|null $RevisionId
 */
class UpdateAliasRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Name: string,
     *     FunctionVersion?: string|null,
     *     Description?: string|null,
     *     RoutingConfig?: Shapes\AliasRoutingConfiguration|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
