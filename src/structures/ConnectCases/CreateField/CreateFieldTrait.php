<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateField;

trait CreateFieldTrait
{
    /**
     * @param CreateFieldRequest $args
     * @return CreateFieldResponse
     */
    public function createField(CreateFieldRequest $args)
    {
        $result = parent::createField($args->toArray());
        return new CreateFieldResponse($result->toArray());
    }
}
