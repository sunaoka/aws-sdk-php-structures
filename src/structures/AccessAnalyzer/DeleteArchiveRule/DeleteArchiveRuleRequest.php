<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteArchiveRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $ruleName
 * @property string|null $clientToken
 */
class DeleteArchiveRuleRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     ruleName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
