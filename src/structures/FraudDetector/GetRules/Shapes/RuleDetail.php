<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property string $description
 * @property string $detectorId
 * @property string $ruleVersion
 * @property string $expression
 * @property 'DETECTORPL' $language
 * @property list<string> $outcomes
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 */
class RuleDetail extends Shape
{
    /**
     * @param array{
     *     ruleId?: string,
     *     description?: string,
     *     detectorId?: string,
     *     ruleVersion?: string,
     *     expression?: string,
     *     language?: 'DETECTORPL',
     *     outcomes?: list<string>,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
