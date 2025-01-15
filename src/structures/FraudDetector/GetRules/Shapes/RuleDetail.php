<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ruleId
 * @property string|null $description
 * @property string|null $detectorId
 * @property string|null $ruleVersion
 * @property string|null $expression
 * @property 'DETECTORPL'|null $language
 * @property list<string>|null $outcomes
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 */
class RuleDetail extends Shape
{
    /**
     * @param array{
     *     ruleId?: string|null,
     *     description?: string|null,
     *     detectorId?: string|null,
     *     ruleVersion?: string|null,
     *     expression?: string|null,
     *     language?: 'DETECTORPL'|null,
     *     outcomes?: list<string>|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
