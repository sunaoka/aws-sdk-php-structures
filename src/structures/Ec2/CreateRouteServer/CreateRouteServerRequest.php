<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $AmazonSideAsn
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property 'enable'|'disable'|'reset'|null $PersistRoutes
 * @property int|null $PersistRoutesDuration
 * @property bool|null $SnsNotificationsEnabled
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateRouteServerRequest extends Request
{
    /**
     * @param array{
     *     AmazonSideAsn: int,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     PersistRoutes?: 'enable'|'disable'|'reset'|null,
     *     PersistRoutesDuration?: int|null,
     *     SnsNotificationsEnabled?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
