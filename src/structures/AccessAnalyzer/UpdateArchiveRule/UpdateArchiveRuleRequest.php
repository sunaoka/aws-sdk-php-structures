<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\UpdateArchiveRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $ruleName
 * @property array<string, Shapes\Criterion> $filter
 * @property string|null $clientToken
 */
class UpdateArchiveRuleRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     ruleName: string,
     *     filter: array<string, Shapes\Criterion>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
