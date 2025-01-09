<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsConfiguredTeams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string $TeamId
 * @property string $TeamName
 * @property string $State
 * @property string $StateReason
 */
class ConfiguredTeam extends Shape
{
    /**
     * @param array{
     *     TenantId: string,
     *     TeamId: string,
     *     TeamName?: string,
     *     State?: string,
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
