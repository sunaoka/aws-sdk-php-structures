<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSandboxes;

trait ListSandboxesTrait
{
    /**
     * @param ListSandboxesRequest $args
     * @return ListSandboxesResponse
     */
    public function listSandboxes(ListSandboxesRequest $args)
    {
        $result = parent::listSandboxes($args->toArray());
        return new ListSandboxesResponse($result->toArray());
    }
}
