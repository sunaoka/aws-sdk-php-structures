<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S3Bucket
 * @property string|null $S3Key
 * @property string|null $S3Version
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $ZipFile
 * @property string|null $Handler
 * @property list<string>|null $BlueprintTypes
 * @property list<Dependency>|null $Dependencies
 */
class CanaryCodeInput extends Shape
{
    /**
     * @param array{
     *     S3Bucket?: string|null,
     *     S3Key?: string|null,
     *     S3Version?: string|null,
     *     ZipFile?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     Handler?: string|null,
     *     BlueprintTypes?: list<string>|null,
     *     Dependencies?: list<Dependency>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
