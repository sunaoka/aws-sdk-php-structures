<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 * @property string|null $Description
 * @property string|null $IntegrationName
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn: string,
     *     Description?: string|null,
     *     IntegrationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
