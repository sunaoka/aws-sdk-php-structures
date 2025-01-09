<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListOrganizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationId
 * @property string $Alias
 * @property string $DefaultMailDomain
 * @property string $ErrorMessage
 * @property string $State
 */
class OrganizationSummary extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string,
     *     Alias?: string,
     *     DefaultMailDomain?: string,
     *     ErrorMessage?: string,
     *     State?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
