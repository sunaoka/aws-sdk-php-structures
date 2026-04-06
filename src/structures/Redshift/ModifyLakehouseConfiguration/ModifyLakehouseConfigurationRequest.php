<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyLakehouseConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property 'Register'|'Deregister'|null $LakehouseRegistration
 * @property string|null $CatalogName
 * @property 'Associate'|'Disassociate'|null $LakehouseIdcRegistration
 * @property string|null $LakehouseIdcApplicationArn
 * @property bool|null $DryRun
 */
class ModifyLakehouseConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     LakehouseRegistration?: 'Register'|'Deregister'|null,
     *     CatalogName?: string|null,
     *     LakehouseIdcRegistration?: 'Associate'|'Disassociate'|null,
     *     LakehouseIdcApplicationArn?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
