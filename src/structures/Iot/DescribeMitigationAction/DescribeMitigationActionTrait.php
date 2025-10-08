<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeMitigationAction;

trait DescribeMitigationActionTrait
{
    /**
     * @param DescribeMitigationActionRequest $args
     * @return DescribeMitigationActionResponse
     */
    public function describeMitigationAction(DescribeMitigationActionRequest $args)
    {
        $result = parent::describeMitigationAction($args->toArray());
        return new DescribeMitigationActionResponse($result->toArray());
    }
}
