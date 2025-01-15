<?php

namespace Sunaoka\Aws\Structures\Glue\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property string|null $Description
 * @property string|null $DataFilter
 * @property string|null $IntegrationName
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier: string,
     *     Description?: string|null,
     *     DataFilter?: string|null,
     *     IntegrationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
