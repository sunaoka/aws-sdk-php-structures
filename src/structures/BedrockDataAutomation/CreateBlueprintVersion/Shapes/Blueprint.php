<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprintVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $blueprintArn
 * @property string $schema
 * @property 'DOCUMENT'|'IMAGE'|'AUDIO' $type
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property string $blueprintName
 * @property string|null $blueprintVersion
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 * @property string|null $kmsKeyId
 * @property array<string, string>|null $kmsEncryptionContext
 */
class Blueprint extends Shape
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     schema: string,
     *     type: 'DOCUMENT'|'IMAGE'|'AUDIO',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     blueprintName: string,
     *     blueprintVersion?: string|null,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     kmsKeyId?: string|null,
     *     kmsEncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
