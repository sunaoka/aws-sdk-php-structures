<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VersionId
 * @property list<string>|null $VersionStages
 * @property \Aws\Api\DateTimeResult|null $LastAccessedDate
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property list<string>|null $KmsKeyIds
 */
class SecretVersionsListEntry extends Shape
{
    /**
     * @param array{
     *     VersionId?: string|null,
     *     VersionStages?: list<string>|null,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     KmsKeyIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
