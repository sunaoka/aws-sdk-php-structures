<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateDevEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property list<Shapes\RepositoryInput>|null $repositories
 * @property string|null $clientToken
 * @property string|null $alias
 * @property list<Shapes\IdeConfiguration>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200>|null $inactivityTimeoutMinutes
 * @property Shapes\PersistentStorageConfiguration $persistentStorage
 * @property string|null $vpcConnectionName
 */
class CreateDevEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     repositories?: list<Shapes\RepositoryInput>|null,
     *     clientToken?: string|null,
     *     alias?: string|null,
     *     ides?: list<Shapes\IdeConfiguration>|null,
     *     instanceType: 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge',
     *     inactivityTimeoutMinutes?: int<0, 1200>|null,
     *     persistentStorage: Shapes\PersistentStorageConfiguration,
     *     vpcConnectionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
