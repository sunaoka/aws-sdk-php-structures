<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property string|null $IntegrationName
 * @property string|null $DataFilter
 * @property string|null $Description
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier: string,
     *     IntegrationName?: string|null,
     *     DataFilter?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
