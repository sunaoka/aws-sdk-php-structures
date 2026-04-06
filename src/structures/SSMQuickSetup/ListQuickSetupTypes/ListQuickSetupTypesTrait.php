<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\ListQuickSetupTypes;

trait ListQuickSetupTypesTrait
{
    /**
     * @return ListQuickSetupTypesResponse
     */
    public function listQuickSetupTypes()
    {
        $result = parent::listQuickSetupTypes();
        return new ListQuickSetupTypesResponse($result->toArray());
    }
}
