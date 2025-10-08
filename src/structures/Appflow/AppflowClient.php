<?php

namespace Sunaoka\Aws\Structures\Appflow;

class AppflowClient extends \Aws\Appflow\AppflowClient
{
    use CancelFlowExecutions\CancelFlowExecutionsTrait;
    use CreateConnectorProfile\CreateConnectorProfileTrait;
    use CreateFlow\CreateFlowTrait;
    use DeleteConnectorProfile\DeleteConnectorProfileTrait;
    use DeleteFlow\DeleteFlowTrait;
    use DescribeConnector\DescribeConnectorTrait;
    use DescribeConnectorEntity\DescribeConnectorEntityTrait;
    use DescribeConnectorProfiles\DescribeConnectorProfilesTrait;
    use DescribeConnectors\DescribeConnectorsTrait;
    use DescribeFlow\DescribeFlowTrait;
    use DescribeFlowExecutionRecords\DescribeFlowExecutionRecordsTrait;
    use ListConnectorEntities\ListConnectorEntitiesTrait;
    use ListConnectors\ListConnectorsTrait;
    use ListFlows\ListFlowsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use RegisterConnector\RegisterConnectorTrait;
    use ResetConnectorMetadataCache\ResetConnectorMetadataCacheTrait;
    use StartFlow\StartFlowTrait;
    use StopFlow\StopFlowTrait;
    use TagResource\TagResourceTrait;
    use UnregisterConnector\UnregisterConnectorTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateConnectorProfile\UpdateConnectorProfileTrait;
    use UpdateConnectorRegistration\UpdateConnectorRegistrationTrait;
    use UpdateFlow\UpdateFlowTrait;
}
