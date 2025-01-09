<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $enabled
 * @property string $name
 * @property list<Shapes\NotificationSetting> $notificationSettings
 * @property Shapes\Source $source
 * @property list<Shapes\Tag> $tags
 */
class CreateTrustAnchorRequest extends Request
{
    /**
     * @param array{
     *     enabled?: bool,
     *     name: string,
     *     notificationSettings?: list<Shapes\NotificationSetting>,
     *     source: Shapes\Source,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
