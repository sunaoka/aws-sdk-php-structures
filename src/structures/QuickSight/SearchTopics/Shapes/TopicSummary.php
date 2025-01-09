<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $TopicId
 * @property string $Name
 * @property 'LEGACY'|'NEW_READER_EXPERIENCE' $UserExperienceVersion
 */
class TopicSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     TopicId?: string,
     *     Name?: string,
     *     UserExperienceVersion?: 'LEGACY'|'NEW_READER_EXPERIENCE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
