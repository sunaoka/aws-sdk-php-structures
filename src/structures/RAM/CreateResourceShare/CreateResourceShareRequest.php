<?php

namespace Sunaoka\Aws\Structures\RAM\CreateResourceShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<string> $resourceArns
 * @property list<string> $principals
 * @property list<Shapes\Tag> $tags
 * @property bool $allowExternalPrincipals
 * @property string $clientToken
 * @property list<string> $permissionArns
 * @property list<string> $sources
 */
class CreateResourceShareRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourceArns?: list<string>,
     *     principals?: list<string>,
     *     tags?: list<Shapes\Tag>,
     *     allowExternalPrincipals?: bool,
     *     clientToken?: string,
     *     permissionArns?: list<string>,
     *     sources?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
