<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ruleId
 * @property string $detectorId
 * @property string|null $ruleVersion
 * @property string|null $nextToken
 * @property int<50, 100>|null $maxResults
 */
class GetRulesRequest extends Request
{
    /**
     * @param array{
     *     ruleId?: string|null,
     *     detectorId: string,
     *     ruleVersion?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<50, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
