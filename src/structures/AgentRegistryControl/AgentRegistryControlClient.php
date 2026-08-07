<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl;

class AgentRegistryControlClient extends \Aws\AgentRegistryControl\AgentRegistryControlClient
{
    use CreateRegistry\CreateRegistryTrait;
    use CreateRegistryRecord\CreateRegistryRecordTrait;
    use DeleteRegistry\DeleteRegistryTrait;
    use DeleteRegistryRecord\DeleteRegistryRecordTrait;
    use GetRegistry\GetRegistryTrait;
    use GetRegistryRecord\GetRegistryRecordTrait;
    use ListRegistries\ListRegistriesTrait;
    use ListRegistryRecords\ListRegistryRecordsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use SubmitRegistryRecordForApproval\SubmitRegistryRecordForApprovalTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateRegistry\UpdateRegistryTrait;
    use UpdateRegistryRecord\UpdateRegistryRecordTrait;
    use UpdateRegistryRecordStatus\UpdateRegistryRecordStatusTrait;
}
