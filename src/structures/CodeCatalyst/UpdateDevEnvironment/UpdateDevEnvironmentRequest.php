<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $id
 * @property string $alias
 * @property list<Shapes\IdeConfiguration> $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int $inactivityTimeoutMinutes
 * @property string $clientToken
 */
class UpdateDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     id: string,
     *     alias?: string,
     *     ides?: list<Shapes\IdeConfiguration>,
     *     instanceType?: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge',
     *     inactivityTimeoutMinutes?: int,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
