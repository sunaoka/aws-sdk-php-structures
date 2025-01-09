<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $RoleArn
 * @property string $Description
 * @property list<Shapes\DocumentMetadataConfiguration> $DocumentMetadataConfigurationUpdates
 * @property Shapes\CapacityUnitsConfiguration $CapacityUnits
 * @property list<Shapes\UserTokenConfiguration> $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN' $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration $UserGroupResolutionConfiguration
 */
class UpdateIndexRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     RoleArn?: string,
     *     Description?: string,
     *     DocumentMetadataConfigurationUpdates?: list<Shapes\DocumentMetadataConfiguration>,
     *     CapacityUnits?: Shapes\CapacityUnitsConfiguration,
     *     UserTokenConfigurations?: list<Shapes\UserTokenConfiguration>,
     *     UserContextPolicy?: 'ATTRIBUTE_FILTER'|'USER_TOKEN',
     *     UserGroupResolutionConfiguration?: Shapes\UserGroupResolutionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
