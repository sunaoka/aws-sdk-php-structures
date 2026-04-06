<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentCompliances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appComponentName
 * @property array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null $compliance
 * @property Cost|null $cost
 * @property string|null $message
 * @property ResiliencyScore|null $resiliencyScore
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null $status
 */
class AppComponentCompliance extends Shape
{
    /**
     * @param array{
     *     appComponentName?: string|null,
     *     compliance?: array<'Software'|'Hardware'|'AZ'|'Region', DisruptionCompliance>|null,
     *     cost?: Cost|null,
     *     message?: string|null,
     *     resiliencyScore?: ResiliencyScore|null,
     *     status?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
