<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 * @property string $Description
 * @property string $IntegrationName
 */
class ModifyIntegrationRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn: string,
     *     Description?: string,
     *     IntegrationName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
