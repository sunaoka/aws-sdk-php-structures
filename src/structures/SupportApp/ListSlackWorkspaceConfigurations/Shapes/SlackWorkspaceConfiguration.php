<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackWorkspaceConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowOrganizationMemberAccount
 * @property string $teamId
 * @property string|null $teamName
 */
class SlackWorkspaceConfiguration extends Shape
{
    /**
     * @param array{
     *     allowOrganizationMemberAccount?: bool|null,
     *     teamId: string,
     *     teamName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
