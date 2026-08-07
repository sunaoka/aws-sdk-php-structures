<?php

namespace Sunaoka\Aws\Structures\AgentRegistry;

class AgentRegistryClient extends \Aws\AgentRegistry\AgentRegistryClient
{
    use BatchGetDiscoverableRegistryRecord\BatchGetDiscoverableRegistryRecordTrait;
    use ListDiscoverableRegistryRecords\ListDiscoverableRegistryRecordsTrait;
    use SearchDiscoverableRegistryRecords\SearchDiscoverableRegistryRecordsTrait;
}
