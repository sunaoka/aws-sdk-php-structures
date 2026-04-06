<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appArn
 * @property string|null $appVersion
 * @property 'NotEqual'|'Added'|'Removed'|null $diffType
 * @property string|null $referenceId
 * @property ResourceIdentifier|null $resourceIdentifier
 */
class ResourceDrift extends Shape
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     appVersion?: string|null,
     *     diffType?: 'NotEqual'|'Added'|'Removed'|null,
     *     referenceId?: string|null,
     *     resourceIdentifier?: ResourceIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
