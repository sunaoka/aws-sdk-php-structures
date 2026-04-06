<?php

namespace Sunaoka\Aws\Structures\AIOps;

class AIOpsClient extends \Aws\AIOps\AIOpsClient
{
    use CreateInvestigationGroup\CreateInvestigationGroupTrait;
    use DeleteInvestigationGroup\DeleteInvestigationGroupTrait;
    use DeleteInvestigationGroupPolicy\DeleteInvestigationGroupPolicyTrait;
    use GetInvestigationGroup\GetInvestigationGroupTrait;
    use GetInvestigationGroupPolicy\GetInvestigationGroupPolicyTrait;
    use ListInvestigationGroups\ListInvestigationGroupsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use PutInvestigationGroupPolicy\PutInvestigationGroupPolicyTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateInvestigationGroup\UpdateInvestigationGroupTrait;
}
