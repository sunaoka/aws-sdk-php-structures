<?php

namespace Sunaoka\Aws\Structures\WellArchitected\DisassociateLenses;

trait DisassociateLensesTrait
{
    /**
     * @param DisassociateLensesRequest $args
     * @return void
     */
    public function disassociateLenses(DisassociateLensesRequest $args)
    {
        parent::disassociateLenses($args->toArray());
    }
}
