<?php

namespace Sunaoka\Aws\Structures\Sns\RemovePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property string $Label
 */
class RemovePermissionRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     Label: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
