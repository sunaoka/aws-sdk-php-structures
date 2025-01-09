<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteArchiveRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $ruleName
 * @property string $clientToken
 */
class DeleteArchiveRuleRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     ruleName: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
