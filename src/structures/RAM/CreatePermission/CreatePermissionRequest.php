<?php

namespace Sunaoka\Aws\Structures\RAM\CreatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $resourceType
 * @property string $policyTemplate
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePermissionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourceType: string,
     *     policyTemplate: string,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
