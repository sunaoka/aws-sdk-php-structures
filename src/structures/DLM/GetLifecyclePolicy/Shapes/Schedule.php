<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property bool|null $CopyTags
 * @property list<Tag>|null $TagsToAdd
 * @property list<Tag>|null $VariableTags
 * @property CreateRule|null $CreateRule
 * @property RetainRule|null $RetainRule
 * @property FastRestoreRule|null $FastRestoreRule
 * @property list<CrossRegionCopyRule>|null $CrossRegionCopyRules
 * @property list<ShareRule>|null $ShareRules
 * @property DeprecateRule|null $DeprecateRule
 * @property ArchiveRule|null $ArchiveRule
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CopyTags?: bool|null,
     *     TagsToAdd?: list<Tag>|null,
     *     VariableTags?: list<Tag>|null,
     *     CreateRule?: CreateRule|null,
     *     RetainRule?: RetainRule|null,
     *     FastRestoreRule?: FastRestoreRule|null,
     *     CrossRegionCopyRules?: list<CrossRegionCopyRule>|null,
     *     ShareRules?: list<ShareRule>|null,
     *     DeprecateRule?: DeprecateRule|null,
     *     ArchiveRule?: ArchiveRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
