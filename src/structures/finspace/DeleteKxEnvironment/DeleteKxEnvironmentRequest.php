<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $clientToken
 */
class DeleteKxEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
