<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ARN
 * @property string|null $Name
 * @property string|null $VersionId
 * @property \Psr\Http\Message\StreamInterface|null $SecretBinary
 * @property string|null $SecretString
 * @property list<string>|null $VersionStages
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 */
class SecretValueEntry extends Shape
{
    /**
     * @param array{
     *     ARN?: string|null,
     *     Name?: string|null,
     *     VersionId?: string|null,
     *     SecretBinary?: \Psr\Http\Message\StreamInterface|null,
     *     SecretString?: string|null,
     *     VersionStages?: list<string>|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
