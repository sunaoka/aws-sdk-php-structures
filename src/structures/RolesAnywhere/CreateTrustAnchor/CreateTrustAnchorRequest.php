<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $enabled
 * @property string $name
 * @property list<Shapes\NotificationSetting>|null $notificationSettings
 * @property Shapes\Source $source
 * @property list<Shapes\Tag>|null $tags
 */
class CreateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     name: string,
     *     notificationSettings?: list<Shapes\NotificationSetting>|null,
     *     source: Shapes\Source,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
