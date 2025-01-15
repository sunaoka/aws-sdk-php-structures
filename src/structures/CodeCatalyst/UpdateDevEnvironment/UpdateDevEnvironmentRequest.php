<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property string|null $alias
 * @property list<Shapes\IdeConfiguration>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge'|null $instanceType
 * @property int<0, 1200>|null $inactivityTimeoutMinutes
 * @property string|null $clientToken
 */
class UpdateDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string,
     *     alias?: string|null,
     *     ides?: list<Shapes\IdeConfiguration>|null,
     *     instanceType?: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge'|null,
     *     inactivityTimeoutMinutes?: int<0, 1200>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
