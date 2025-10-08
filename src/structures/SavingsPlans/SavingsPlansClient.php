<?php

namespace Sunaoka\Aws\Structures\SavingsPlans;

class SavingsPlansClient extends \Aws\SavingsPlans\SavingsPlansClient
{
    use CreateSavingsPlan\CreateSavingsPlanTrait;
    use DeleteQueuedSavingsPlan\DeleteQueuedSavingsPlanTrait;
    use DescribeSavingsPlanRates\DescribeSavingsPlanRatesTrait;
    use DescribeSavingsPlans\DescribeSavingsPlansTrait;
    use DescribeSavingsPlansOfferingRates\DescribeSavingsPlansOfferingRatesTrait;
    use DescribeSavingsPlansOfferings\DescribeSavingsPlansOfferingsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ReturnSavingsPlan\ReturnSavingsPlanTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
}
