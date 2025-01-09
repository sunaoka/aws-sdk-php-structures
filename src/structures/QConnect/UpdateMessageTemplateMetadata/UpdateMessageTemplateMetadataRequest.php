<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $description
 * @property Shapes\GroupingConfiguration $groupingConfiguration
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string $name
 */
class UpdateMessageTemplateMetadataRequest extends Request
{
    /**
     * @param array{
     *     description?: string,
     *     groupingConfiguration?: Shapes\GroupingConfiguration,
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
