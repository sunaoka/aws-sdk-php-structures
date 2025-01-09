<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $OrganizationResourceId
 * @property string $Arn
 * @property string $SecurityProfileName
 * @property string $Description
 * @property array<string, string> $Tags
 */
class SecurityProfileSearchSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     OrganizationResourceId?: string,
     *     Arn?: string,
     *     SecurityProfileName?: string,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
