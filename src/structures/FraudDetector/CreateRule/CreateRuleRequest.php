<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ruleId
 * @property string $detectorId
 * @property string $description
 * @property string $expression
 * @property 'DETECTORPL' $language
 * @property list<string> $outcomes
 * @property list<Shapes\Tag> $tags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     ruleId: string,
     *     detectorId: string,
     *     description?: string,
     *     expression: string,
     *     language: 'DETECTORPL',
     *     outcomes: list<string>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
