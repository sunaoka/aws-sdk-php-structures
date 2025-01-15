<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\StartDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property list<Shapes\IdeConfiguration>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge'|null $instanceType
 * @property int<0, 1200>|null $inactivityTimeoutMinutes
 */
class StartDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string,
     *     ides?: list<Shapes\IdeConfiguration>|null,
     *     instanceType?: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge'|null,
     *     inactivityTimeoutMinutes?: int<0, 1200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
