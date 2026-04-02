<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $libraryArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $libraryName
 * @property string|null $libraryDescription
 * @property 'ACTIVE'|'DELETING' $status
 * @property list<EntityTypeInfo>|null $entityTypes
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $kmsEncryptionContext
 */
class DataAutomationLibrary extends Shape
{
    /**
     * @param array{
     *     libraryArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     libraryName: string,
     *     libraryDescription?: string|null,
     *     status: 'ACTIVE'|'DELETING',
     *     entityTypes?: list<EntityTypeInfo>|null,
     *     kmsKeyId?: string|null,
     *     kmsEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
