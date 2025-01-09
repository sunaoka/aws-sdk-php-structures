<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateCallAnalyticsCategory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CategoryName
 * @property list<Shapes\Rule> $Rules
 * @property 'REAL_TIME'|'POST_CALL' $InputType
 */
class CreateCallAnalyticsCategoryRequest extends Request
{
    /**
     * @param array{
     *     CategoryName: string,
     *     Rules: list<Shapes\Rule>,
     *     InputType?: 'REAL_TIME'|'POST_CALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
