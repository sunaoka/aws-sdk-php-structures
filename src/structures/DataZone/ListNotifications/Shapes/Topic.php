<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NotificationResource $resource
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_VIEWER'|'DOMAIN_OWNER'|'PROJECT_SUBSCRIBER' $role
 * @property string $subject
 */
class Topic extends Shape
{
    /**
     * @param array{
     *     resource: NotificationResource,
     *     role: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_VIEWER'|'DOMAIN_OWNER'|'PROJECT_SUBSCRIBER',
     *     subject: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
