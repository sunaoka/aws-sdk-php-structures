<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAssistantAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bedrockKnowledgeBaseArn
 * @property string $accessRoleArn
 */
class ExternalBedrockKnowledgeBaseConfig extends Shape
{
    /**
     * @param array{
     *     bedrockKnowledgeBaseArn: string,
     *     accessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
