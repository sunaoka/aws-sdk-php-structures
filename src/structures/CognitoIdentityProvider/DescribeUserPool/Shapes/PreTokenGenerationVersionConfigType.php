<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'V1_0'|'V2_0'|'V3_0' $LambdaVersion
 * @property string $LambdaArn
 */
class PreTokenGenerationVersionConfigType extends Shape
{
    /**
     * @param array{
     *     LambdaVersion: 'V1_0'|'V2_0'|'V3_0',
     *     LambdaArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
