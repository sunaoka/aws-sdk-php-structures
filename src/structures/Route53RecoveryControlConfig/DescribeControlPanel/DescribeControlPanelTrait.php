<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\DescribeControlPanel;

trait DescribeControlPanelTrait
{
    /**
     * @param DescribeControlPanelRequest $args
     * @return DescribeControlPanelResponse
     */
    public function describeControlPanel(DescribeControlPanelRequest $args)
    {
        $result = parent::describeControlPanel($args->toArray());
        return new DescribeControlPanelResponse($result->toArray());
    }
}
