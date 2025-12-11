<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property int $ruleRevision
 * @property list<string> $tagKeys
 * @property string|null $clientToken
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     ruleRevision: int,
     *     tagKeys: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
