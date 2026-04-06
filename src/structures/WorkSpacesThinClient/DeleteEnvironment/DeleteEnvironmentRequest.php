<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\DeleteEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $clientToken
 */
class DeleteEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
