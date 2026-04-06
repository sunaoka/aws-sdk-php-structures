<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasIdentifier
 * @property string $flowIdentifier
 */
class DeleteFlowAliasRequest extends Request
{
    /**
     * @param array{
     *     aliasIdentifier: string,
     *     flowIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
