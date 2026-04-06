<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplateMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property string $knowledgeBaseId
 * @property string $messageTemplateId
 * @property string|null $name
 */
class UpdateMessageTemplateMetadataRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     knowledgeBaseId: string,
     *     messageTemplateId: string,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
