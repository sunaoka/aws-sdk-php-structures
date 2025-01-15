<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateDevEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $spaceName
 * @property string $projectName
 * @property string|null $alias
 * @property list<Shapes\IdeConfiguration>|null $ides
 * @property 'dev.standard1.small'|'dev.standard1.medium'|'dev.standard1.large'|'dev.standard1.xlarge'|null $instanceType
 * @property int<0, 1200>|null $inactivityTimeoutMinutes
 * @property string|null $clientToken
 */
class UpdateDevEnvironmentResponse extends Response
{
}
