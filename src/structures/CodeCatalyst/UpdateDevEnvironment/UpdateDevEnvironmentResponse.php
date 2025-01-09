<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateDevEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $spaceName
 * @property string $projectName
 * @property string $alias
 * @property list<Shapes\IdeConfiguration> $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge' $instanceType
 * @property int<0, 1200> $inactivityTimeoutMinutes
 * @property string $clientToken
 */
class UpdateDevEnvironmentResponse extends Response
{
}
