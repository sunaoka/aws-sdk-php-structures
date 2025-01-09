<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBProxyName
 * @property string $NewDBProxyName
 * @property list<Shapes\UserAuthConfig> $Auth
 * @property bool $RequireTLS
 * @property int $IdleClientTimeout
 * @property bool $DebugLogging
 * @property string $RoleArn
 * @property list<string> $SecurityGroups
 */
class ModifyDBProxyRequest extends Request
{
    /**
     * @param array{
     *     DBProxyName: string,
     *     NewDBProxyName?: string,
     *     Auth?: list<Shapes\UserAuthConfig>,
     *     RequireTLS?: bool,
     *     IdleClientTimeout?: int,
     *     DebugLogging?: bool,
     *     RoleArn?: string,
     *     SecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
