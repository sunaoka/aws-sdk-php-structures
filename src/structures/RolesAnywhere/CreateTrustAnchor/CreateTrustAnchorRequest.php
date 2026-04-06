<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\Source $source
 * @property bool|null $enabled
 * @property list<Shapes\Tag>|null $tags
 * @property list<Shapes\NotificationSetting>|null $notificationSettings
 */
class CreateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     source: Shapes\Source,
     *     enabled?: bool|null,
     *     tags?: list<Shapes\Tag>|null,
     *     notificationSettings?: list<Shapes\NotificationSetting>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
