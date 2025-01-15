<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CreateSecret;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $VersionId
 * @property list<Shapes\ReplicationStatusType>|null $ReplicationStatus
 */
class CreateSecretResponse extends Response
{
}
