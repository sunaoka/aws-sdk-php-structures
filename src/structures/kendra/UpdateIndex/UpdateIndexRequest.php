<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $RoleArn
 * @property string|null $Description
 * @property list<Shapes\DocumentMetadataConfiguration>|null $DocumentMetadataConfigurationUpdates
 * @property Shapes\CapacityUnitsConfiguration|null $CapacityUnits
 * @property list<Shapes\UserTokenConfiguration>|null $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN'|null $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration|null $UserGroupResolutionConfiguration
 */
class UpdateIndexRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     RoleArn?: string|null,
     *     Description?: string|null,
     *     DocumentMetadataConfigurationUpdates?: list<Shapes\DocumentMetadataConfiguration>|null,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration|null,
     *     UserTokenConfigurations?: list<Shapes\UserTokenConfiguration>|null,
     *     UserContextPolicy?: 'ATTRIBUTE_FILTER'|'USER_TOKEN'|null,
     *     UserGroupResolutionConfiguration?: Shapes\UserGroupResolutionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
