<?php

namespace Sunaoka\Aws\Structures\Sms\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $roleName
 * @property string $clientToken
 * @property list<Shapes\ServerGroup> $serverGroups
 * @property list<Shapes\Tag> $tags
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     roleName?: string,
     *     clientToken?: string,
     *     serverGroups?: list<Shapes\ServerGroup>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
