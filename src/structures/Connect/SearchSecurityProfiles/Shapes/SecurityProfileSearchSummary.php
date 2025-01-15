<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $OrganizationResourceId
 * @property string|null $Arn
 * @property string|null $SecurityProfileName
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class SecurityProfileSearchSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     OrganizationResourceId?: string|null,
     *     Arn?: string|null,
     *     SecurityProfileName?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
