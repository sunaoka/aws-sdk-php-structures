<?php

namespace Sunaoka\Aws\Structures\CloudFormation\GetTemplateSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $TreatUnrecognizedResourceTypesAsWarnings
 */
class TemplateSummaryConfig extends Shape
{
    /**
     * @param array{TreatUnrecognizedResourceTypesAsWarnings?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
