<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $NetworkId
 * @property string|null $MemberId
 * @property Shapes\NodeConfiguration $NodeConfiguration
 * @property array<string, string>|null $Tags
 */
class CreateNodeRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     NetworkId: string,
     *     MemberId?: string|null,
     *     NodeConfiguration: Shapes\NodeConfiguration,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
