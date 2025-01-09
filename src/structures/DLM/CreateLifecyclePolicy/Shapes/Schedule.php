<?php

namespace Sunaoka\Aws\Structures\DLM\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property bool $CopyTags
 * @property list<Tag> $TagsToAdd
 * @property list<Tag> $VariableTags
 * @property CreateRule $CreateRule
 * @property RetainRule $RetainRule
 * @property FastRestoreRule $FastRestoreRule
 * @property list<CrossRegionCopyRule> $CrossRegionCopyRules
 * @property list<ShareRule> $ShareRules
 * @property DeprecateRule $DeprecateRule
 * @property ArchiveRule $ArchiveRule
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     CopyTags?: bool,
     *     TagsToAdd?: list<Tag>,
     *     VariableTags?: list<Tag>,
     *     CreateRule?: CreateRule,
     *     RetainRule?: RetainRule,
     *     FastRestoreRule?: FastRestoreRule,
     *     CrossRegionCopyRules?: list<CrossRegionCopyRule>,
     *     ShareRules?: list<ShareRule>,
     *     DeprecateRule?: DeprecateRule,
     *     ArchiveRule?: ArchiveRule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
