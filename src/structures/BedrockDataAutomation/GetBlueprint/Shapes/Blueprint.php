<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetBlueprint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string $schema
 * @property 'DOCUMENT'|'IMAGE' $type
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $blueprintName
 * @property string $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 * @property string $kmsKeyId
 * @property array<string, string> $kmsEncryptionContext
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     schema: string,
     *     type: 'DOCUMENT'|'IMAGE',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     blueprintName: string,
     *     blueprintVersion?: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE',
     *     kmsKeyId?: string,
     *     kmsEncryptionContext?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
