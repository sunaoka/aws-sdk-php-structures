<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricDataQueryDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Id
 * @property string $Path
 * @property string $Expression
 * @property 'PROMQL'|'SQL'|'METRIC_MATH' $Type
 * @property list<Shapes\Tag>|null $Tags
 */
class PutMetricDataQueryDefinitionRequest extends Request
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Path: string,
     *     Expression: string,
     *     Type: 'PROMQL'|'SQL'|'METRIC_MATH',
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
