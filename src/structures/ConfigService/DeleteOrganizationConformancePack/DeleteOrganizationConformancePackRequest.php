<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteOrganizationConformancePack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationConformancePackName
 */
class DeleteOrganizationConformancePackRequest extends Request
{
    /**
     * @param array{OrganizationConformancePackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
