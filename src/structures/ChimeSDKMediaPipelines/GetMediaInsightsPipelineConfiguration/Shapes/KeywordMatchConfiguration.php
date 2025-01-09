<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property list<string> $Keywords
 * @property bool $Negate
 */
class KeywordMatchConfiguration extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     Keywords: list<string>,
     *     Negate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
