<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetGroupVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupId
 * @property string $GroupVersionId
 */
class GetGroupVersionRequest extends Request
{
    /**
     * @param array{
     *     GroupId: string,
     *     GroupVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
