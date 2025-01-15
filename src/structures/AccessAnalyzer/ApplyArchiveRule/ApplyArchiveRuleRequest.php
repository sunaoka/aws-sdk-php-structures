<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ApplyArchiveRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $ruleName
 * @property string|null $clientToken
 */
class ApplyArchiveRuleRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     ruleName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
