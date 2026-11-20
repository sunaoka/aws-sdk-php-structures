<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EntityId
 * @property string|null $ChangeSetId
 * @property list<string>|null $EntityIds
 */
class AssessmentTargetFilter extends Shape
{
    /**
     * @param array{
     *     EntityId?: string|null,
     *     ChangeSetId?: string|null,
     *     EntityIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
