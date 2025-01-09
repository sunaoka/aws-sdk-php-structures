<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetArchiveRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $ruleName
 */
class GetArchiveRuleRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     ruleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
