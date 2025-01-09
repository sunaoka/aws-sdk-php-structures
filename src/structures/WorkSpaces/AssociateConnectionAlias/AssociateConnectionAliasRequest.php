<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AssociateConnectionAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasId
 * @property string $ResourceId
 */
class AssociateConnectionAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasId: string,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
