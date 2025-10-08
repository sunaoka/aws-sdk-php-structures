<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListConfiguredModelAlgorithms;

trait ListConfiguredModelAlgorithmsTrait
{
    /**
     * @param ListConfiguredModelAlgorithmsRequest $args
     * @return ListConfiguredModelAlgorithmsResponse
     */
    public function listConfiguredModelAlgorithms(ListConfiguredModelAlgorithmsRequest $args)
    {
        $result = parent::listConfiguredModelAlgorithms($args->toArray());
        return new ListConfiguredModelAlgorithmsResponse($result->toArray());
    }
}
