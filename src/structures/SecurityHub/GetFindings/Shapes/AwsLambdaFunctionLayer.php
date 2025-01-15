<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int|null $CodeSize
 */
class AwsLambdaFunctionLayer extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CodeSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
