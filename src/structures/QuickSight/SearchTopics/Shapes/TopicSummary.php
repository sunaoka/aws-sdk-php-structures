<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $TopicId
 * @property string|null $Name
 * @property 'LEGACY'|'NEW_READER_EXPERIENCE'|null $UserExperienceVersion
 */
class TopicSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     TopicId?: string|null,
     *     Name?: string|null,
     *     UserExperienceVersion?: 'LEGACY'|'NEW_READER_EXPERIENCE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
