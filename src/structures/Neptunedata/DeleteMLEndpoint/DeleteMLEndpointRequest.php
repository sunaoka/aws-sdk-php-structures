<?php

namespace Sunaoka\Aws\Structures\Neptunedata\DeleteMLEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $neptuneIamRoleArn
 * @property bool|null $clean
 */
class DeleteMLEndpointRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     neptuneIamRoleArn?: string|null,
     *     clean?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
