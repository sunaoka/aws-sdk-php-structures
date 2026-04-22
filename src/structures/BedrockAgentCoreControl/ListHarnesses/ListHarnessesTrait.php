<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListHarnesses;

trait ListHarnessesTrait
{
    /**
     * @param ListHarnessesRequest $args
     * @return ListHarnessesResponse
     */
    public function listHarnesses(ListHarnessesRequest $args)
    {
        $result = parent::listHarnesses($args->toArray());
        return new ListHarnessesResponse($result->toArray());
    }
}
