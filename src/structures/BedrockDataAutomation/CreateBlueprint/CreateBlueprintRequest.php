<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintName
 * @property 'DOCUMENT'|'IMAGE' $type
 * @property 'DEVELOPMENT'|'LIVE' $blueprintStage
 * @property string $schema
 * @property string $clientToken
 * @property Shapes\EncryptionConfiguration $encryptionConfiguration
 */
class CreateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintName: string,
     *     type: 'DOCUMENT'|'IMAGE',
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE',
     *     schema: string,
     *     clientToken?: string,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
