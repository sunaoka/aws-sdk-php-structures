<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\ListRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleId
 * @property string $RuleName
 * @property string $ShortDescription
 * @property string $LongDescription
 * @property list<string> $RuleTags
 */
class RuleMetadata extends Shape
{
    /**
     * @param array{
     *     RuleId?: string,
     *     RuleName?: string,
     *     ShortDescription?: string,
     *     LongDescription?: string,
     *     RuleTags?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
