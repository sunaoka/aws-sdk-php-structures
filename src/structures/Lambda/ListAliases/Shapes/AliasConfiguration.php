<?php

namespace Sunaoka\Aws\Structures\Lambda\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasArn
 * @property string $Name
 * @property string $FunctionVersion
 * @property string $Description
 * @property AliasRoutingConfiguration $RoutingConfig
 * @property string $RevisionId
 */
class AliasConfiguration extends Shape
{
    /**
     * @param array{
     *     AliasArn?: string,
     *     Name?: string,
     *     FunctionVersion?: string,
     *     Description?: string,
     *     RoutingConfig?: AliasRoutingConfiguration,
     *     RevisionId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
