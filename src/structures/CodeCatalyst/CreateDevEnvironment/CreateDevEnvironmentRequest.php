<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property list<Shapes\RepositoryInput> $repositories
 * @property string $clientToken
 * @property string $alias
 * @property list<Shapes\IdeConfiguration> $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200> $inactivityTimeoutMinutes
 * @property Shapes\PersistentStorageConfiguration $persistentStorage
 * @property string $vpcConnectionName
 */
class CreateDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     repositories?: list<Shapes\RepositoryInput>,
     *     clientToken?: string,
     *     alias?: string,
     *     ides?: list<Shapes\IdeConfiguration>,
     *     instanceType: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge',
     *     inactivityTimeoutMinutes?: int<0, 1200>,
     *     persistentStorage: Shapes\PersistentStorageConfiguration,
     *     vpcConnectionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
