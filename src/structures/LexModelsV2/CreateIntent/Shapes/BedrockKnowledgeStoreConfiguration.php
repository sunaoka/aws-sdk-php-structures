<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bedrockKnowledgeBaseArn
 * @property bool $exactResponse
 * @property BedrockKnowledgeStoreExactResponseFields $exactResponseFields
 */
class BedrockKnowledgeStoreConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockKnowledgeBaseArn: string,
     *     exactResponse?: bool,
     *     exactResponseFields?: BedrockKnowledgeStoreExactResponseFields
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
