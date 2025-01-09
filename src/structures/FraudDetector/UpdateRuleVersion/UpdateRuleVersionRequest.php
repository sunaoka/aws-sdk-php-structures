<?php

namespace Sunaoka\Aws\Structures\FraudDetector\UpdateRuleVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Rule $rule
 * @property string $description
 * @property string $expression
 * @property 'DETECTORPL' $language
 * @property list<string> $outcomes
 * @property list<Shapes\Tag> $tags
 */
class UpdateRuleVersionRequest extends Request
{
    /**
     * @param array{
     *     rule: Shapes\Rule,
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
