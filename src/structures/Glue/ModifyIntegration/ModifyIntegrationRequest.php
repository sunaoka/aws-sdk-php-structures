<?php

namespace Sunaoka\Aws\Structures\Glue\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property string $Description
 * @property string $DataFilter
 * @property string $IntegrationName
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier: string,
     *     Description?: string,
     *     DataFilter?: string,
     *     IntegrationName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
