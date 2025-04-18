<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $quickResponseId
 * @property string|null $name
 * @property Shapes\QuickResponseDataProvider|null $content
 * @property string|null $contentType
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property bool|null $removeGroupingConfiguration
 * @property string|null $description
 * @property bool|null $removeDescription
 * @property string|null $shortcutKey
 * @property bool|null $removeShortcutKey
 * @property bool|null $isActive
 * @property list<string>|null $channels
 * @property string|null $language
 */
class UpdateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     quickResponseId: string,
     *     name?: string|null,
     *     content?: Shapes\QuickResponseDataProvider|null,
     *     contentType?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     removeGroupingConfiguration?: bool|null,
     *     description?: string|null,
     *     removeDescription?: bool|null,
     *     shortcutKey?: string|null,
     *     removeShortcutKey?: bool|null,
     *     isActive?: bool|null,
     *     channels?: list<string>|null,
     *     language?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
