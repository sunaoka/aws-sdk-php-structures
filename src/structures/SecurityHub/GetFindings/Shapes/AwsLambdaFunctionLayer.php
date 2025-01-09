<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int $CodeSize
 */
class AwsLambdaFunctionLayer extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CodeSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
