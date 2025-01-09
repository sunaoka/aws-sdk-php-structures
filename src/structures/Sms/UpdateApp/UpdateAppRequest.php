<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $name
 * @property string $description
 * @property string $roleName
 * @property list<Shapes\ServerGroup> $serverGroups
 * @property list<Shapes\Tag> $tags
 */
class UpdateAppRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     name?: string,
     *     description?: string,
     *     roleName?: string,
     *     serverGroups?: list<Shapes\ServerGroup>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
