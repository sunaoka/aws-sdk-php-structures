<?php

namespace Sunaoka\Aws\Structures\WellArchitected\AssociateLenses;

trait AssociateLensesTrait
{
    /**
     * @param AssociateLensesRequest $args
     * @return void
     */
    public function associateLenses(AssociateLensesRequest $args)
    {
        parent::associateLenses($args->toArray());
    }
}
