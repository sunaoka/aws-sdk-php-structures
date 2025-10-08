<?php

namespace Sunaoka\Aws\Structures\Translate\DeleteTerminology;

trait DeleteTerminologyTrait
{
    /**
     * @param DeleteTerminologyRequest $args
     * @return void
     */
    public function deleteTerminology(DeleteTerminologyRequest $args)
    {
        parent::deleteTerminology($args->toArray());
    }
}
