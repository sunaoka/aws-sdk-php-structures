<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackWorkspaceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowOrganizationMemberAccount
 * @property string $teamId
 * @property string $teamName
 */
class SlackWorkspaceConfiguration extends Shape
{
    /**
     * @param array{
     *     allowOrganizationMemberAccount?: bool,
     *     teamId: string,
     *     teamName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
