<?php

namespace Sunaoka\Aws\Structures\IotDataPlane\GetConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientId
 * @property bool|null $includeSocketInformation
 */
class GetConnectionRequest extends Request
{
    /**
     * @param array{
     *     clientId: string,
     *     includeSocketInformation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
