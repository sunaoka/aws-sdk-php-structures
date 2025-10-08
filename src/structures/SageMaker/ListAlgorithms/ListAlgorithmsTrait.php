<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAlgorithms;

trait ListAlgorithmsTrait
{
    /**
     * @param ListAlgorithmsRequest $args
     * @return ListAlgorithmsResponse
     */
    public function listAlgorithms(ListAlgorithmsRequest $args)
    {
        $result = parent::listAlgorithms($args->toArray());
        return new ListAlgorithmsResponse($result->toArray());
    }
}
