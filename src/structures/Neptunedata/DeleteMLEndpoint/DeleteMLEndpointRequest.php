<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteMLEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $neptuneIamRoleArn
 * @property bool $clean
 */
class DeleteMLEndpointRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     neptuneIamRoleArn?: string,
     *     clean?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
