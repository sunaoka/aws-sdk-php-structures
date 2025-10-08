<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeyRotations;

trait ListKeyRotationsTrait
{
    /**
     * @param ListKeyRotationsRequest $args
     * @return ListKeyRotationsResponse
     */
    public function listKeyRotations(ListKeyRotationsRequest $args)
    {
        $result = parent::listKeyRotations($args->toArray());
        return new ListKeyRotationsResponse($result->toArray());
    }
}
