<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\UpdateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintArn
 * @property string $schema
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 */
class UpdateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintArn: string,
     *     schema: string,
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
