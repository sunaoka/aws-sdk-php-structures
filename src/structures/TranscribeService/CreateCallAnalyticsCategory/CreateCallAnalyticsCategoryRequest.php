<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CategoryName
 * @property list<Shapes\Rule> $Rules
 * @property list<Shapes\Tag>|null $Tags
 * @property 'REAL_TIME'|'POST_CALL'|null $InputType
 */
class CreateCallAnalyticsCategoryRequest extends Request
{
    /**
     * @param array{
     *     CategoryName: string,
     *     Rules: list<Shapes\Rule>,
     *     Tags?: list<Shapes\Tag>|null,
     *     InputType?: 'REAL_TIME'|'POST_CALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
