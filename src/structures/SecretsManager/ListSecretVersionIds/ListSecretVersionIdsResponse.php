<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SecretVersionsListEntry>|null $Versions
 * @property string|null $NextToken
 * @property string|null $ARN
 * @property string|null $Name
 */
class ListSecretVersionIdsResponse extends Response
{
}
