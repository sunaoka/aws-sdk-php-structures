<?php

namespace Sunaoka\Aws\Structures\Ses\ListReceiptRuleSets;

trait ListReceiptRuleSetsTrait
{
    /**
     * @param ListReceiptRuleSetsRequest $args
     * @return ListReceiptRuleSetsResponse
     */
    public function listReceiptRuleSets(ListReceiptRuleSetsRequest $args)
    {
        $result = parent::listReceiptRuleSets($args->toArray());
        return new ListReceiptRuleSetsResponse($result->toArray());
    }
}
