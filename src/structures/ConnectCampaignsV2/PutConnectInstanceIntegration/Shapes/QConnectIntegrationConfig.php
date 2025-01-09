<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseArn
 */
class QConnectIntegrationConfig extends Shape
{
    /**
     * @param array{knowledgeBaseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
