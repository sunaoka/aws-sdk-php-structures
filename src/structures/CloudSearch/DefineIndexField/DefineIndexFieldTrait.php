<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineIndexField;

trait DefineIndexFieldTrait
{
    /**
     * @param DefineIndexFieldRequest $args
     * @return DefineIndexFieldResponse
     */
    public function defineIndexField(DefineIndexFieldRequest $args)
    {
        $result = parent::defineIndexField($args->toArray());
        return new DefineIndexFieldResponse($result->toArray());
    }
}
