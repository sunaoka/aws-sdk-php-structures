<?php

namespace Sunaoka\Aws\Structures\Continuum\DisassociateCollector;

trait DisassociateCollectorTrait
{
    /**
     * @param DisassociateCollectorRequest $args
     * @return void
     */
    public function disassociateCollector(DisassociateCollectorRequest $args)
    {
        parent::disassociateCollector($args->toArray());
    }
}
