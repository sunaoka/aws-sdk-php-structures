<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsJsonSubstitutionCommandPreprocessorConfig|null $awsJsonSubstitution
 */
class CommandPreprocessor extends Shape
{
    /**
     * @param array{awsJsonSubstitution?: AwsJsonSubstitutionCommandPreprocessorConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
