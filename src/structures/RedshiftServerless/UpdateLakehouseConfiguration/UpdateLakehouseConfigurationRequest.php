<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateLakehouseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $catalogName
 * @property bool|null $dryRun
 * @property string|null $lakehouseIdcApplicationArn
 * @property 'Associate'|'Disassociate'|null $lakehouseIdcRegistration
 * @property 'Register'|'Deregister'|null $lakehouseRegistration
 * @property string $namespaceName
 */
class UpdateLakehouseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     catalogName?: string|null,
     *     dryRun?: bool|null,
     *     lakehouseIdcApplicationArn?: string|null,
     *     lakehouseIdcRegistration?: 'Associate'|'Disassociate'|null,
     *     lakehouseRegistration?: 'Register'|'Deregister'|null,
     *     namespaceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
