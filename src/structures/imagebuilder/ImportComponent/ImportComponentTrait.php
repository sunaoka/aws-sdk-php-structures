<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ImportComponent;

trait ImportComponentTrait
{
    /**
     * @param ImportComponentRequest $args
     * @return ImportComponentResponse
     */
    public function importComponent(ImportComponentRequest $args)
    {
        $result = parent::importComponent($args->toArray());
        return new ImportComponentResponse($result->toArray());
    }
}
