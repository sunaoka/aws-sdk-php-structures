<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ListSecretVersionIds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VersionId
 * @property list<string> $VersionStages
 * @property \Aws\Api\DateTimeResult $LastAccessedDate
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property list<string> $KmsKeyIds
 */
class SecretVersionsListEntry extends Shape
{
    /**
     * @param array{
     *     VersionId?: string,
     *     VersionStages?: list<string>,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     KmsKeyIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
