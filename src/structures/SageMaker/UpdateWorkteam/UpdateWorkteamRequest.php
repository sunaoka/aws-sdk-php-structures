<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateWorkteam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkteamName
 * @property list<Shapes\MemberDefinition>|null $MemberDefinitions
 * @property string|null $Description
 * @property Shapes\NotificationConfiguration|null $NotificationConfiguration
 * @property Shapes\WorkerAccessConfiguration|null $WorkerAccessConfiguration
 */
class UpdateWorkteamRequest extends Request
{
    /**
     * @param array{
     *     WorkteamName: string,
     *     MemberDefinitions?: list<Shapes\MemberDefinition>|null,
     *     Description?: string|null,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration|null,
     *     WorkerAccessConfiguration?: Shapes\WorkerAccessConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
