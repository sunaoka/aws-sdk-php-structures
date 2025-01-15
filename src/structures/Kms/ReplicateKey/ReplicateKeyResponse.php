<?php

namespace Sunaoka\Aws\Structures\Kms\ReplicateKey;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\KeyMetadata|null $ReplicaKeyMetadata
 * @property string|null $ReplicaPolicy
 * @property list<Shapes\Tag>|null $ReplicaTags
 */
class ReplicateKeyResponse extends Response
{
}
