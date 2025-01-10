<?php

namespace Sunaoka\Aws\Structures\SecretsManager\BatchGetSecretValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ARN
 * @property string $Name
 * @property string $VersionId
 * @property \Psr\Http\Message\StreamInterface $SecretBinary
 * @property string $SecretString
 * @property list<string> $VersionStages
 * @property \Aws\Api\DateTimeResult $CreatedDate
 */
class SecretValueEntry extends Shape
{
    /**
     * @param array{
     *     ARN?: string,
     *     Name?: string,
     *     VersionId?: string,
     *     SecretBinary?: \Psr\Http\Message\StreamInterface,
     *     SecretString?: string,
     *     VersionStages?: list<string>,
     *     CreatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
