<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListConnectInstanceIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseArn
 */
class QConnectIntegrationSummary extends Shape
{
    /**
     * @param array{knowledgeBaseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
