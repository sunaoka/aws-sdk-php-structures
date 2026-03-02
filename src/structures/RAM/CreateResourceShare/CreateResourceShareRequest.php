<?php

namespace Sunaoka\Aws\Structures\RAM\CreateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string>|null $resourceArns
 * @property list<string>|null $principals
 * @property list<Shapes\Tag>|null $tags
 * @property bool|null $allowExternalPrincipals
 * @property string|null $clientToken
 * @property list<string>|null $permissionArns
 * @property list<string>|null $sources
 * @property Shapes\ResourceShareConfiguration|null $resourceShareConfiguration
 */
class CreateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourceArns?: list<string>|null,
     *     principals?: list<string>|null,
     *     tags?: list<Shapes\Tag>|null,
     *     allowExternalPrincipals?: bool|null,
     *     clientToken?: string|null,
     *     permissionArns?: list<string>|null,
     *     sources?: list<string>|null,
     *     resourceShareConfiguration?: Shapes\ResourceShareConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
