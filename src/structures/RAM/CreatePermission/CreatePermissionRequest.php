<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $resourceType
 * @property string $policyTemplate
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 */
class CreatePermissionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourceType: string,
     *     policyTemplate: string,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
