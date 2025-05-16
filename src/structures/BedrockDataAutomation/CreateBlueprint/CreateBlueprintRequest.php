<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\CreateBlueprint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $blueprintName
 * @property 'DOCUMENT'|'IMAGE'|'AUDIO'|'VIDEO' $type
 * @property 'DEVELOPMENT'|'LIVE'|null $blueprintStage
 * @property string $schema
 * @property string|null $clientToken
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBlueprintRequest extends Request
{
    /**
     * @param array{
     *     blueprintName: string,
     *     type: 'DOCUMENT'|'IMAGE'|'AUDIO'|'VIDEO',
     *     blueprintStage?: 'DEVELOPMENT'|'LIVE'|null,
     *     schema: string,
     *     clientToken?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
