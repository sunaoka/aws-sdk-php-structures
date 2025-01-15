<?php

namespace Sunaoka\Aws\Structures\BackupGateway\CreateGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ActivationKey
 * @property string $GatewayDisplayName
 * @property 'BACKUP_VM' $GatewayType
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGatewayRequest extends Request
{
    /**
     * @param array{
     *     ActivationKey: string,
     *     GatewayDisplayName: string,
     *     GatewayType: 'BACKUP_VM',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
