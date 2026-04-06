<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 * @property string|null $WorkforceName
 * @property list<Shapes\MemberDefinition> $MemberDefinitions
 * @property string $Description
 * @property Shapes\NotificationConfiguration|null $NotificationConfiguration
 * @property Shapes\WorkerAccessConfiguration|null $WorkerAccessConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     WorkforceName?: string|null,
     *     MemberDefinitions: list<Shapes\MemberDefinition>,
     *     Description: string,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration|null,
     *     WorkerAccessConfiguration?: Shapes\WorkerAccessConfiguration|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
