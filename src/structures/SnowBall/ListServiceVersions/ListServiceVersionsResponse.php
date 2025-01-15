<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ServiceVersion> $ServiceVersions
 * @property 'KUBERNETES'|'EKS_ANYWHERE' $ServiceName
 * @property list<Shapes\DependentService>|null $DependentServices
 * @property string|null $NextToken
 */
class ListServiceVersionsResponse extends Response
{
}
