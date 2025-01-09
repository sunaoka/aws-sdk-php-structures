<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property string $Name
 * @property string $FunctionVersion
 * @property string $Description
 * @property Shapes\AliasRoutingConfiguration $RoutingConfig
 * @property string $RevisionId
 */
class UpdateAliasRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     Name: string,
     *     FunctionVersion?: string,
     *     Description?: string,
     *     RoutingConfig?: Shapes\AliasRoutingConfiguration,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
