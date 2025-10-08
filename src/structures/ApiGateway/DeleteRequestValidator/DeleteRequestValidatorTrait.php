<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteRequestValidator;

trait DeleteRequestValidatorTrait
{
    /**
     * @param DeleteRequestValidatorRequest $args
     * @return void
     */
    public function deleteRequestValidator(DeleteRequestValidatorRequest $args)
    {
        parent::deleteRequestValidator($args->toArray());
    }
}
