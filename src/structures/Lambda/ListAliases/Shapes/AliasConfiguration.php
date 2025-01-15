<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AliasArn
 * @property string|null $Name
 * @property string|null $FunctionVersion
 * @property string|null $Description
 * @property AliasRoutingConfiguration|null $RoutingConfig
 * @property string|null $RevisionId
 */
class AliasConfiguration extends Shape
{
    /**
     * @param array{
     *     AliasArn?: string|null,
     *     Name?: string|null,
     *     FunctionVersion?: string|null,
     *     Description?: string|null,
     *     RoutingConfig?: AliasRoutingConfiguration|null,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
