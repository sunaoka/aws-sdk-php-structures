<?php

namespace Sunaoka\Aws\Structures\CostExplorer\CreateAnomalySubscription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AnomalySubscription $AnomalySubscription
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 */
class CreateAnomalySubscriptionRequest extends Request
{
    /**
     * @param array{
     *     AnomalySubscription: Shapes\AnomalySubscription,
     *     ResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
