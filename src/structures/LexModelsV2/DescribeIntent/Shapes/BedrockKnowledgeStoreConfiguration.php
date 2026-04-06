<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bedrockKnowledgeBaseArn
 * @property bool|null $exactResponse
 * @property BedrockKnowledgeStoreExactResponseFields|null $exactResponseFields
 */
class BedrockKnowledgeStoreConfiguration extends Shape
{
    /**
     * @param array{
     *     bedrockKnowledgeBaseArn: string,
     *     exactResponse?: bool|null,
     *     exactResponseFields?: BedrockKnowledgeStoreExactResponseFields|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
