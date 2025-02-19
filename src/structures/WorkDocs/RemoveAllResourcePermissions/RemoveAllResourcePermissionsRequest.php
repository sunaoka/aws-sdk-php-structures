<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RemoveAllResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $ResourceId
 */
class RemoveAllResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
