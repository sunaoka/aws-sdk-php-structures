<?php

namespace Sunaoka\Aws\Structures\Interconnect\UpdateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $description
 * @property string|null $bandwidth
 * @property string|null $clientToken
 */
class UpdateConnectionRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     description?: string|null,
     *     bandwidth?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
