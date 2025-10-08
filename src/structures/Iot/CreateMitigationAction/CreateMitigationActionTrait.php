<?php

namespace Sunaoka\Aws\Structures\Iot\CreateMitigationAction;

trait CreateMitigationActionTrait
{
    /**
     * @param CreateMitigationActionRequest $args
     * @return CreateMitigationActionResponse
     */
    public function createMitigationAction(CreateMitigationActionRequest $args)
    {
        $result = parent::createMitigationAction($args->toArray());
        return new CreateMitigationActionResponse($result->toArray());
    }
}
