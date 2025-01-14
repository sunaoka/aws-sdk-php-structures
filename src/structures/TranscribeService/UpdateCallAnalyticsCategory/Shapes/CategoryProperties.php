<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CategoryName
 * @property list<Rule> $Rules
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property list<Tag> $Tags
 * @property 'REAL_TIME'|'POST_CALL' $InputType
 */
class CategoryProperties extends Shape
{
    /**
     * @param array{
     *     CategoryName?: string,
     *     Rules?: list<Rule>,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     InputType?: 'REAL_TIME'|'POST_CALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
