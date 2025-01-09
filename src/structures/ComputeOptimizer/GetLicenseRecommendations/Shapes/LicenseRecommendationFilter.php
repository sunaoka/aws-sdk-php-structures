<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCode'|'LicenseName' $name
 * @property list<string> $values
 */
class LicenseRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCode'|'LicenseName',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
