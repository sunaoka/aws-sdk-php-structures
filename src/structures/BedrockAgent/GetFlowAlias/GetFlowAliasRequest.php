<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlowAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $aliasIdentifier
 * @property string $flowIdentifier
 */
class GetFlowAliasRequest extends Request
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
