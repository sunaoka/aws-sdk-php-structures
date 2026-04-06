<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateQuickResponse;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $channels
 * @property Shapes\QuickResponseDataProvider|null $content
 * @property string|null $contentType
 * @property string|null $description
 * @property Shapes\GroupingConfiguration|null $groupingConfiguration
 * @property bool|null $isActive
 * @property string $knowledgeBaseId
 * @property string|null $language
 * @property string|null $name
 * @property string $quickResponseId
 * @property bool|null $removeDescription
 * @property bool|null $removeGroupingConfiguration
 * @property bool|null $removeShortcutKey
 * @property string|null $shortcutKey
 */
class UpdateQuickResponseRequest extends Request
{
    /**
     * @param array{
     *     channels?: list<string>|null,
     *     content?: Shapes\QuickResponseDataProvider|null,
     *     contentType?: string|null,
     *     description?: string|null,
     *     groupingConfiguration?: Shapes\GroupingConfiguration|null,
     *     isActive?: bool|null,
     *     knowledgeBaseId: string,
     *     language?: string|null,
     *     name?: string|null,
     *     quickResponseId: string,
     *     removeDescription?: bool|null,
     *     removeGroupingConfiguration?: bool|null,
     *     removeShortcutKey?: bool|null,
     *     shortcutKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
