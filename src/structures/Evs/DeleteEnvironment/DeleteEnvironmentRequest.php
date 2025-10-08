<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $environmentId
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     environmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
