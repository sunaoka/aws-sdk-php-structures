<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $channels
 * @property string|null $clientToken
 * @property Shapes\QuickResponseDataProvider $content
 * @property string|null $contentType
 * @property string|null $description
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property bool|null $isActive
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string $name
 * @property string|null $shortcutKey
 * @property array<string, string>|null $tags
 */
class CreateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     channels?: list<string>|null,
     *     clientToken?: string|null,
     *     content: Shapes\QuickResponseDataProvider,
     *     contentType?: string|null,
     *     description?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     isActive?: bool|null,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     name: string,
     *     shortcutKey?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
