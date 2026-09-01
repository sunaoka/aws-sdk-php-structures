<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCustomDetectionRuleAssociations;

trait ListCustomDetectionRuleAssociationsTrait
{
    /**
     * @param ListCustomDetectionRuleAssociationsRequest $args
     * @return ListCustomDetectionRuleAssociationsResponse
     */
    public function listCustomDetectionRuleAssociations(ListCustomDetectionRuleAssociationsRequest $args)
    {
        $result = parent::listCustomDetectionRuleAssociations($args->toArray());
        return new ListCustomDetectionRuleAssociationsResponse($result->toArray());
    }
}
