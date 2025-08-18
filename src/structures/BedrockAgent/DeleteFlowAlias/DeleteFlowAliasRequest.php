<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowIdentifier
 * @property string $aliasIdentifier
 */
class DeleteFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     flowIdentifier: string,
     *     aliasIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
