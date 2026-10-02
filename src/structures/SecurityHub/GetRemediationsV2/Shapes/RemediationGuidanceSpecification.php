<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RemediationParameter>|null $Parameters
 * @property list<RemediationStep>|null $Steps
 * @property string|null $ExpectedEndState
 * @property list<string>|null $RequiredPermissions
 */
class RemediationGuidanceSpecification extends Shape
{
    /**
     * @param array{
     *     Parameters?: list<RemediationParameter>|null,
     *     Steps?: list<RemediationStep>|null,
     *     ExpectedEndState?: string|null,
     *     RequiredPermissions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
