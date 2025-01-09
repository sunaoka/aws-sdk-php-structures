<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appArn
 * @property string $appVersion
 * @property 'NotEqual'|'Added'|'Removed' $diffType
 * @property string $referenceId
 * @property ResourceIdentifier $resourceIdentifier
 */
class ResourceDrift extends Shape
{
    /**
     * @param array{
     *     appArn?: string,
     *     appVersion?: string,
     *     diffType?: 'NotEqual'|'Added'|'Removed',
     *     referenceId?: string,
     *     resourceIdentifier?: ResourceIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
