<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleId
 * @property string $detectorId
 * @property string $ruleVersion
 * @property string $nextToken
 * @property int $maxResults
 */
class GetRulesRequest extends Request
{
    /**
     * @param array{
     *     ruleId?: string,
     *     detectorId: string,
     *     ruleVersion?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
