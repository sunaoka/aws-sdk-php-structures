<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $description
 * @property string|null $roleName
 * @property string|null $clientToken
 * @property list<Shapes\ServerGroup>|null $serverGroups
 * @property list<Shapes\Tag>|null $tags
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     roleName?: string|null,
     *     clientToken?: string|null,
     *     serverGroups?: list<Shapes\ServerGroup>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
