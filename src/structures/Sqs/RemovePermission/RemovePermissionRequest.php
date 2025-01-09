<?php

namespace Sunaoka\Aws\Structures\Sqs\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property string $Label
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
