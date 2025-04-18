<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\QuickResponseDataProvider $content
 * @property string|null $contentType
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property string|null $description
 * @property string|null $shortcutKey
 * @property bool|null $isActive
 * @property list<string>|null $channels
 * @property string|null $language
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     name: string,
     *     content: Shapes\QuickResponseDataProvider,
     *     contentType?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     description?: string|null,
     *     shortcutKey?: string|null,
     *     isActive?: bool|null,
     *     channels?: list<string>|null,
     *     language?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
