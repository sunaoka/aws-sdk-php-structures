<?php

namespace Sunaoka\Aws\Structures\AppRegistry;

class AppRegistryClient extends \Aws\AppRegistry\AppRegistryClient
{
    use AssociateAttributeGroup\AssociateAttributeGroupTrait;
    use AssociateResource\AssociateResourceTrait;
    use CreateApplication\CreateApplicationTrait;
    use CreateAttributeGroup\CreateAttributeGroupTrait;
    use DeleteApplication\DeleteApplicationTrait;
    use DeleteAttributeGroup\DeleteAttributeGroupTrait;
    use DisassociateAttributeGroup\DisassociateAttributeGroupTrait;
    use DisassociateResource\DisassociateResourceTrait;
    use GetApplication\GetApplicationTrait;
    use GetAssociatedResource\GetAssociatedResourceTrait;
    use GetAttributeGroup\GetAttributeGroupTrait;
    use GetConfiguration\GetConfigurationTrait;
    use ListApplications\ListApplicationsTrait;
    use ListAssociatedAttributeGroups\ListAssociatedAttributeGroupsTrait;
    use ListAssociatedResources\ListAssociatedResourcesTrait;
    use ListAttributeGroups\ListAttributeGroupsTrait;
    use ListAttributeGroupsForApplication\ListAttributeGroupsForApplicationTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutConfiguration\PutConfigurationTrait;
    use SyncResource\SyncResourceTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateApplication\UpdateApplicationTrait;
    use UpdateAttributeGroup\UpdateAttributeGroupTrait;
}
