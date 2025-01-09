<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 * @property list<Shapes\MemberDefinition> $MemberDefinitions
 * @property string $Description
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 * @property Shapes\WorkerAccessConfiguration $WorkerAccessConfiguration
 */
class UpdateWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     MemberDefinitions?: list<Shapes\MemberDefinition>,
     *     Description?: string,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration,
     *     WorkerAccessConfiguration?: Shapes\WorkerAccessConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
