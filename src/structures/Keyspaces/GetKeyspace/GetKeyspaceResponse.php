<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetKeyspace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $keyspaceName
 * @property string $resourceArn
 * @property 'SINGLE_REGION'|'MULTI_REGION' $replicationStrategy
 * @property list<string>|null $replicationRegions
 */
class GetKeyspaceResponse extends Response
{
}
