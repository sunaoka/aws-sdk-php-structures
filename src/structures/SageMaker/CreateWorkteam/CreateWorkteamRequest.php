<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 * @property string $WorkforceName
 * @property list<Shapes\MemberDefinition> $MemberDefinitions
 * @property string $Description
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 * @property Shapes\WorkerAccessConfiguration $WorkerAccessConfiguration
 * @property list<Shapes\Tag> $Tags
 */
class CreateWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     WorkforceName?: string,
     *     MemberDefinitions: list<Shapes\MemberDefinition>,
     *     Description: string,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration,
     *     WorkerAccessConfiguration?: Shapes\WorkerAccessConfiguration,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
