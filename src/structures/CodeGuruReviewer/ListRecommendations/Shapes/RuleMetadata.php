<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleId
 * @property string|null $RuleName
 * @property string|null $ShortDescription
 * @property string|null $LongDescription
 * @property list<string>|null $RuleTags
 */
class RuleMetadata extends Shape
{
    /**
     * @param array{
     *     RuleId?: string|null,
     *     RuleName?: string|null,
     *     ShortDescription?: string|null,
     *     LongDescription?: string|null,
     *     RuleTags?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
