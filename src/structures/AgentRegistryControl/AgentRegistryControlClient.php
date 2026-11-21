<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl;

class AgentRegistryControlClient extends \Aws\AgentRegistryControl\AgentRegistryControlClient
{
    use AssociatePublisher\AssociatePublisherTrait;
    use CreatePublisher\CreatePublisherTrait;
    use CreateRegistry\CreateRegistryTrait;
    use CreateRegistryRecord\CreateRegistryRecordTrait;
    use DeletePublisher\DeletePublisherTrait;
    use DeleteRegistry\DeleteRegistryTrait;
    use DeleteRegistryRecord\DeleteRegistryRecordTrait;
    use DisassociatePublisher\DisassociatePublisherTrait;
    use GetPublisher\GetPublisherTrait;
    use GetRegistry\GetRegistryTrait;
    use GetRegistryRecord\GetRegistryRecordTrait;
    use ListPublisherAssociations\ListPublisherAssociationsTrait;
    use ListPublishers\ListPublishersTrait;
    use ListRegistries\ListRegistriesTrait;
    use ListRegistryRecords\ListRegistryRecordsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SubmitRegistryRecordForApproval\SubmitRegistryRecordForApprovalTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdatePublisherAssociationApprovalStatus\UpdatePublisherAssociationApprovalStatusTrait;
    use UpdateRegistry\UpdateRegistryTrait;
    use UpdateRegistryRecord\UpdateRegistryRecordTrait;
    use UpdateRegistryRecordStatus\UpdateRegistryRecordStatusTrait;
    use ValidatePublisher\ValidatePublisherTrait;
}
