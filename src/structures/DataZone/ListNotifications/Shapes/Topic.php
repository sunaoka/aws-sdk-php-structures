<?php

namespace Sunaoka\Aws\Structures\DataZone\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $subject
 * @property NotificationResource $resource
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_VIEWER'|'DOMAIN_OWNER'|'PROJECT_SUBSCRIBER' $role
 */
class Topic extends Shape
{
    /**
     * @param array{
     *     subject: string,
     *     resource: NotificationResource,
     *     role: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_VIEWER'|'DOMAIN_OWNER'|'PROJECT_SUBSCRIBER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
