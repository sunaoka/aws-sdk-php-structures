<?php

namespace Sunaoka\Aws\Structures\Ec2\GetFlowLogsIntegrationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $FlowLogId
 * @property string $ConfigDeliveryS3DestinationArn
 * @property Shapes\IntegrateServices $IntegrateServices
 */
class GetFlowLogsIntegrationTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     FlowLogId: string,
     *     ConfigDeliveryS3DestinationArn: string,
     *     IntegrateServices: Shapes\IntegrateServices
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
