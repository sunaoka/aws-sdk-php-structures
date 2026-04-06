<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\ExportLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCode'|'LicenseName'|null $name
 * @property list<string>|null $values
 */
class LicenseRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCode'|'LicenseName'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
