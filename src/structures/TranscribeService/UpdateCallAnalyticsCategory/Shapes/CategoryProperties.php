<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CategoryName
 * @property list<Rule>|null $Rules
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property list<Tag>|null $Tags
 * @property 'REAL_TIME'|'POST_CALL'|null $InputType
 */
class CategoryProperties extends Shape
{
    /**
     * @param array{
     *     CategoryName?: string|null,
     *     Rules?: list<Rule>|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     InputType?: 'REAL_TIME'|'POST_CALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
