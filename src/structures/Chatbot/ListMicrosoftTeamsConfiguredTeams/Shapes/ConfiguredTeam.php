<?php

namespace Sunaoka\Aws\Structures\Chatbot\ListMicrosoftTeamsConfiguredTeams\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string $TeamId
 * @property string|null $TeamName
 * @property string|null $State
 * @property string|null $StateReason
 */
class ConfiguredTeam extends Shape
{
    /**
     * @param array{
     *     TenantId: string,
     *     TeamId: string,
     *     TeamName?: string|null,
     *     State?: string|null,
     *     StateReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
