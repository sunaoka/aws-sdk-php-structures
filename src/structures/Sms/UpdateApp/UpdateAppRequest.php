<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property string|null $name
 * @property string|null $description
 * @property string|null $roleName
 * @property list<Shapes\ServerGroup>|null $serverGroups
 * @property list<Shapes\Tag>|null $tags
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     roleName?: string|null,
     *     serverGroups?: list<Shapes\ServerGroup>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
