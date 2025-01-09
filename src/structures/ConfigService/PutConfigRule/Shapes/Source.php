<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOM_LAMBDA'|'AWS'|'CUSTOM_POLICY' $Owner
 * @property string $SourceIdentifier
 * @property list<SourceDetail> $SourceDetails
 * @property CustomPolicyDetails $CustomPolicyDetails
 */
class Source extends Shape
{
    /**
     * @param array{
     *     Owner: 'CUSTOM_LAMBDA'|'AWS'|'CUSTOM_POLICY',
     *     SourceIdentifier?: string,
     *     SourceDetails?: list<SourceDetail>,
     *     CustomPolicyDetails?: CustomPolicyDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
