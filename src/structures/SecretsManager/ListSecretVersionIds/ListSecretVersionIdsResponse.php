<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SecretVersionsListEntry> $Versions
 * @property string $NextToken
 * @property string $ARN
 * @property string $Name
 */
class ListSecretVersionIdsResponse extends Response
{
}
