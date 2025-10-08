<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCommandInvocations;

trait ListCommandInvocationsTrait
{
    /**
     * @param ListCommandInvocationsRequest $args
     * @return ListCommandInvocationsResponse
     */
    public function listCommandInvocations(ListCommandInvocationsRequest $args)
    {
        $result = parent::listCommandInvocations($args->toArray());
        return new ListCommandInvocationsResponse($result->toArray());
    }
}
