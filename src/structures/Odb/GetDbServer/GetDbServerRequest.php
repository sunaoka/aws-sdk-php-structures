<?php

namespace Sunaoka\Aws\Structures\Odb\GetDbServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property string $dbServerId
 */
class GetDbServerRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     dbServerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
