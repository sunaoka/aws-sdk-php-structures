<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListOrganizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationId
 * @property string|null $Alias
 * @property string|null $DefaultMailDomain
 * @property string|null $ErrorMessage
 * @property string|null $State
 */
class OrganizationSummary extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string|null,
     *     Alias?: string|null,
     *     DefaultMailDomain?: string|null,
     *     ErrorMessage?: string|null,
     *     State?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
