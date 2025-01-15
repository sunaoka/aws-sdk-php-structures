<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string|null $NewDBProxyName
 * @property list<Shapes\UserAuthConfig>|null $Auth
 * @property bool|null $RequireTLS
 * @property int|null $IdleClientTimeout
 * @property bool|null $DebugLogging
 * @property string|null $RoleArn
 * @property list<string>|null $SecurityGroups
 */
class ModifyDBProxyRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     NewDBProxyName?: string|null,
     *     Auth?: list<Shapes\UserAuthConfig>|null,
     *     RequireTLS?: bool|null,
     *     IdleClientTimeout?: int|null,
     *     DebugLogging?: bool|null,
     *     RoleArn?: string|null,
     *     SecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
