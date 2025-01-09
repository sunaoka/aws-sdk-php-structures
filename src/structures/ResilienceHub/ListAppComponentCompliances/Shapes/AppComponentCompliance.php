<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentCompliances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentName
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance> $compliance
 * @property Cost $cost
 * @property string $message
 * @property ResiliencyScore $resiliencyScore
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $status
 */
class AppComponentCompliance extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string,
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>,
     *     cost?: Cost,
     *     message?: string,
     *     resiliencyScore?: ResiliencyScore,
     *     status?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
