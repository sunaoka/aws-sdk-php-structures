<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property string $IntegrationName
 * @property string $DataFilter
 * @property string $Description
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier: string,
     *     IntegrationName?: string,
     *     DataFilter?: string,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
