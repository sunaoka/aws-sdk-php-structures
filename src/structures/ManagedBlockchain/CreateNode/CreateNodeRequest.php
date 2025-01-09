<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $NetworkId
 * @property string $MemberId
 * @property Shapes\NodeConfiguration $NodeConfiguration
 * @property array<string, string> $Tags
 */
class CreateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     NetworkId: string,
     *     MemberId?: string,
     *     NodeConfiguration: Shapes\NodeConfiguration,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
