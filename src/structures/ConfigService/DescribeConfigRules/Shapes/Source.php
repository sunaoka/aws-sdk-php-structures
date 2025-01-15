<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM_LAMBDA'|'AWS'|'CUSTOM_POLICY' $Owner
 * @property string|null $SourceIdentifier
 * @property list<SourceDetail>|null $SourceDetails
 * @property CustomPolicyDetails|null $CustomPolicyDetails
 */
class Source extends Shape
{
    /**
     * @param array{
     *     Owner: 'CUSTOM_LAMBDA'|'AWS'|'CUSTOM_POLICY',
     *     SourceIdentifier?: string|null,
     *     SourceDetails?: list<SourceDetail>|null,
     *     CustomPolicyDetails?: CustomPolicyDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
